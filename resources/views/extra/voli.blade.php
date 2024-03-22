@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="mb-3">
                Home / Extra / Volly
            </div>
            <img src="{{ asset('assets/images/voli.png') }}" class="img-fluid mb-3" height="500" width="500" alt=""
                style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Volly Ball') }}</h4>
                <p class="text-secondary">
                    {{ __('The OSIS of Bangsri 1 State Vocational School held Basic Student Leadership and Management Training (LDKS) with the inspiring theme, "Building Leadership with Character in the Millennial Era". This intense activity lasted for one full day, precisely on Friday, January 26 2024.
                                                                                                                                                                                                                                                        LDKS is a very important forum for OSIS members to develop their leadership and managerial potential. With a theme that is relevant to the challenges of the millennial era, this activity aims not only to create leaders who are able to manage organizations, but also uphold character values in leadership. 
                                                                                                                                                                                                                                                        Through a series of training sessions, discussions and simulations, LDKS participants were invited to reflect on the essence of quality leadership. The hope is that after participating in this activity, OSIS members can produce leaders who not only have strong managerial skills, but also good character.
                                                                                                                                                                                                                                                        The importance of developing leadership skills not only has an impact on the school environment, but also creates individuals who can make positive contributions to society. The participants are expected to be role models for all students at SMK Negeri 1 Bangsri, motivating them to achieve achievements and face challenges with a positive attitude.
                                                                                                                                                                                                                                                        In an atmosphere full of enthusiasm and collaboration, this LDKS is a momentum to foster solidarity and strengthen ties between OSIS members. Thus, the OSIS of SMK Negeri 1 Bangsri is committed to not only producing future leaders who are academically intelligent, but also have strong personalities and integrity.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
