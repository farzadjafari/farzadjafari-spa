@extends('layouts.master')
@section('main-class', 'resume')

@section('main')
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h1>Resume</h1>
                </div>

                <div class="col-12 text-left">
                    <p>Lives in Boston, Massachusetts, USA</p>

                    <div class="content-wrapper experience">
                        <h2>EXPERIENCE</h2>

                        <h3>4 Thirteen Group sdn. bhd.</h3>
                        <p>PHP Developer on Laravel | Web Developer | Product Manager
                            <br>
                            Feb/2017 – Present</p>

                        <h3>Lions Media Company</h3>
                        <p>Business Analyst | Project Planner & Controller<br>
                            Oct/2015 – Feb/2017</p>

                        <h3>Rah e Eghtesad e Novin Credit & Financial Services Company. (Eghtesad e Novin Bank)</h3>
                        <p>Financial Credit Analyst<br>
                            Nov/2014- Sep/2015</p>

                        <h3>ATEC consultants Company, Project planning & control department office</h3>
                        <p>Project Coordinator<br>
                            Nov/2011- Nov/2014</p>

                        <h3>Parsian Power & Industrial Development Company, Genaveh Combined Cycle Power Plant</h3>
                        <p>E.P.C Project planner (Scheduler) & controller<br>
                            Dec/2010- Oct/2011</p>

                        <h3>Kherad Energy & Environment Company, Semnan Gas Power Plant</h3>
                        <p>E.P.C Project planner (Scheduler) & controller<br>
                            May/2010 - Dec/2010</p>

                        <h3>Arsan Aria Consultant Company</h3>
                        <p>Project controller & system analyzer<br>
                            May/2008 – May/2010</p>
                    </div>

                    <div class="content-wrapper education">
                        <h2>EDUCATION</h2>

                        <h3>Master of Industrial Management (Operational Research)</h3>
                        <p>Date of Graduation: Sep 2014</p>
                        <p>Azad University (Science & Research Campus)</p>

                        <h3>Bachelor of Industrial Eng. (System Planning & Analysis)</h3>
                        <p>Date of Graduation: Sep 2008</p>
                        <p>Shomal University</p>

                        <h3>Mathematical science Diploma</h3>
                        <p>Date of Graduation: Jun 2003</p>
                        <p>Alborz High School</p>
                    </div>

                    <div class="d-flex">
                        <a href="{{ asset('file/farzad-jafari.pdf') }}" class="btn btn-primary"
                           target="_blank">Download My Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
