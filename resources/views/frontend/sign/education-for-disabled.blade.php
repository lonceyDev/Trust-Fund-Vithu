@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Education for disabled
                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>Education for disabled
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mx-auto">
                    <img src="{{ asset('assets/front/img/sign/disabled-vithu-trust.jpg') }}" alt=" Teaching in Braille">
                </div>
            </div>
            <div class="row">
                <h3>Alternatively Abled
                </h3>
                <p>
                    Transgender people are found to include all those who have lost a part of the body / affected any part
                    of the body.
                </p>
                <p>Some of these are dependents (expecting help from others even to perform essential duties) and some are
                    found to be able to do certain occupations, so assistance will be provided to them in the form of
                    permanent livelihood assistance / monthly essential dry food parcels / medical expenses as per their
                    need. Is being observed.
                </p>
                <p>
                    <b>Mentally retarded</b> <br>Those who are not able to think / act naturally (based on the results
                    obtained by measuring the test to help determine the level of knowledge) are able to perform 10% – 20%
                    of the daily activities on the basis of training to complete the daily activities to some extent.
                </p>

                <p>
                    <b>Autism (Autism)
                    </b> <br>Those who are incapable of thinking and acting on their own, living in a state of extreme anger
                    / hatred / nostalgia with a minute-to-minute changing mood. They are incapable of performing daily
                    activities and are in a state of extreme anguish, attacking themselves or those around them. People
                    dealing with such people need to be very patient and dedicated.

                </p>

                <p>
                    <b>Spinal cord injuries</b>
                    <br>The nerves from the brain to the arms and legs descend through the spinal cord. If the cord in
                    the neck hits the cord, both arms and legs will become inactive. Not only performance but all kinds of
                    emotions (touch, pain, heat, cold, vibration) are eliminated. These nerves are also affected as the
                    nerves for urination and defecation descend through the spinal cord. If it hits the spine above the
                    hips, both legs will become paralyzed. Such transgender people are in a situation where they have to
                    stay completely.
                </p>

                <p>
                    <b>Mental health sufferers</b>
                    <br>People who have a reduced ability to think due to war / personal suffering / environmental
                    factors and forget themselves and act like a child. Those who handle them should treat them as if they
                    were a child.
                </p>
                <p>
                    <b>Those who have lost limbs</b>
                    <br>People who have lost their limbs in an accident / war are unable to function normally even if they
                    use prosthetic limbs. There is also a need for them to seek employment opportunities in a way that they
                    can do with their physical disability.
                </p>
                <p>
                    <b>People with hand / foot dysfunction</b>
                    <br>In case of inability to function from arms / legs due to birth / accident / war, those with
                    paralysis need to seek the help of another and those with paralysis of the limbs can transport
                    themselves in three wheelers specially designed for them. Career opportunities for them should be
                    arranged according to their physical condition.
                </p>
            </div>

        </div>
    </div>
@endsection

@push('custom-script')
@endpush

@push('custom-style')
@endpush
