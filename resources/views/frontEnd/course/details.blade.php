@extends('frontEnd.master')

@section('content')
    <div class="edu-course-details-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-7">
                    <div class="course-details-content">
                        <div class="text-success text-center">{{session('massage')}}</div>
                        <div class="content-top">
                            <div class="author-meta">
                                <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/instructor/instructor-small/instructor-2.jpg" alt="Author Images">
                                        <span class="author-title">{{$course->teacher->teacher_name}}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(25 Review)</span>
                            </div>
                        </div>

                        <h3 class="title">{{$course->course_title}}</h3>

                        <div class="course-details-card">
                            <div class="course-content">
                                {{$course->long_description}}
                              </div>
                        </div>

                        <div class="course-details-card mt--40">
                            <div class="course-content">
                                <div class="course-author-wrapper">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd')}}/assets/images/instructor/course-details/instructor-2.jpg" alt="Author Images">
                                    </div>
                                    <div class="author-content">
                                        <h6 class="title">
                                            <a href="instructor-profile.html">{{$course->teacher_name}}</a>
                                        </h6>
                                        <span class="subtitle">Digital Marketer</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when...</p>
                                        <ul class="social-share border-style">
                                            <li><a href="#"><i class="icon-Fb"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                            <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-details-card mt--40">
                            <div class="course-content">
                                <h5 class="mb--20">Review</h5>
                                <div class="row row--30">
                                    <div class="col-lg-4">
                                        <div class="rating-box">
                                            <div class="rating-number">5.0</div>
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span>(25 Review)</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="review-wrapper">

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    5 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">1</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    3 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    2 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    1 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="comment-wrapper pt--40">
                                    <div class="section-title">
                                        <h5 class="mb--25">Reviews</h5>
                                    </div>
                                    <div class="edu-comment">
                                        <div class="thumbnail">
                                            <img src="{{asset('frontEnd')}}/assets/images/course/student-review/student-1.png" alt="Comment Images">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-top">
                                                <h6 class="title">Elen Saspita</h6>
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                            </div>
                                            <span class="subtitle">“ Outstanding Course ”</span>
                                            <p>As Thomas pointed out, Chegg’s survey appears more like a scorecard that details obstacles and challenges that the current university undergraduate student population is going through in their universities and countries.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="eduvibe-sidebar course-details-sidebar">
                        <div class="inner">
                            <div class="eduvibe-widget">
                                <div class="video-area">
                                    <div class="thumbnail video-popup-wrapper">
                                        <img class="radius-small w-100" src="{{asset($course->image)}}" alt="Course Images">
                                    </div>
                                </div>
                                <div class="eduvibe-widget-details mt--35">
                                    <div class="widget-content">
                                        <ul>
                                            <li><span><i class="icon-time-line"></i> Start Date</span><span>6 Hrs 40 Min</span></li>

                                            <li><span><i class="icon-user-2"></i> Enrolled</span><span>89</span></li>

                                            <li><span><i class="icon-draft-line"></i> Lectures</span><span>23</span></li>

                                            <li><span><i class="icon-bar-chart-2-line"></i> Skill Level</span><span>Intermediate</span></li>

                                            <li><span><i class="icon-translate"></i> Language</span><span>English</span></li>

                                            <li><span><i class="icon-artboard-line"></i> Quizzes</span><span>25</span></li>

                                            <li><span><i class="icon-award-line"></i> Certificate</span><span>Yes</span></li>

                                            <li><span><img class="eduvibe-course-sidebar-img-icon" src="{{asset('frontEnd')}}/assets/images/icons/percent.svg" alt="icon Thumb"> Pass Percentage</span><span>90%</span></li>

                                            <li><span><i class="icon-calendar-2-line"></i> Deadline</span><span>25 Dec, 2022</span></li>

                                            <li><span><i class="icon-user-2-line_tie"></i> Instructor</span><span>{{$course->teacher_name}}</span></li>
                                        </ul>

                                        <div class="read-more-btn mt--45">
                                            <a class="edu-btn btn-bg-alt w-100 text-center" href="#">Price: {{number_format($course->fee)}}</a>
                                        </div>

                                        <div class="read-more-btn mt--15">
                                            <a class=" btn  py-4 w-100 text-center {{$check == true ? 'disabled btn-danger ' : ''}}" style="background-color: #525FE1; color: #ffffff; font-weight: 700;font-size: 18px;" href="{{route('course.enroll',['id'=> $course->id])}}">Enroll Now</a>
                                        </div>

                                        <div class="read-more-btn mt--30 text-center">
                                            <div class="eduvibe-post-share">
                                                <span>Share: </span>
                                                <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                                <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                                <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                                <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
