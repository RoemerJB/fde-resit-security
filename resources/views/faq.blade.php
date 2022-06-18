@extends ('layout')

@section ('content')
<title>FAQ</title>
<ul>
    @foreach($faq as $faq)
        <li><ul>{{ $faq->question }}</ul></li> <br>
        <p>{{ $faq->answer }}</p
    @endforeach
</ul>


<!--<section id="faq">
    <article>
        <h3>Frequently Asked Questions</h3>
        <ul id="faq">
            <li>How can you print a document from your laptop at HZ?</li>
            <li>You need to submit the files you want to print via print.hz.nl.<br>After you've done that you can just scan your pass within 24 hours at one of the machines and print.</li>
            <li>How can you scan a document and send it to your laptop at HZ?</li>
            <li>You can scan a document directly at the machines on the monitor where you scan your pass.</li>
            <li>What do you need to do when you are sick/show symptoms of COVID-19?</li>
            <li>Contact your teacher(s) about your absence.</li>
            <li>How can you book a project space in one of the wings?</li>
            <li>Via the webshop on the site of HZ.</li>
            <li>What are the instructions if you want to park your car at the HZ parking lot?</li>
            <li>Answer</li>
        </ul>
    </article>
</section>--!>
@endsection
