<?php


namespace App\Http\Controllers;


use App\Models\Faq;



class FaqController
{
    public function show(Faq $faq)
    {
        return view('faq.show', [
            'faq' => $faq
        ]);
    }

    public function index()
    {
        $faq = Faq::latest()->get();
//        dd($faq);
        return view('faq.index', ['faq' => $faq ]);
    }

    public function create()
    {
        // Shows a view to create a new resource
        return view('faq.create');
    }

    public function store()
    {
        // Persist the new resource
        Faq::create($this->validateFaq());

        return redirect('/faq');
    }

    public function edit(Faq $faq)
    {
        return view('faq.edit', ['faq' => $faq]);
    }

    public function update(Faq $faq)
    {
        $faq->update($this->validateFaq());

        return redirect('/faq/' . $faq->id);
    }

    public function destroy(Faq $faq)
    {
        // Delete the resource
        $faq->delete();

        return redirect('/faq');
    }

    /**
     * @return array
     */
    public function validateFaq(): array
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }

}
