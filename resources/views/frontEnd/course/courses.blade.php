@extends('frontEnd.master')
@section('content')
    <!-- Start Search Popup  -->
    <div class="edu-search-popup">
        <div class="close-button">
            <button class="close-trigger"><i class="ri-close-line"></i></button>
        </div>
        <div class="inner">
            <form class="search-form" action="#">
                <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                <button class="submit-button"><i class="icon-search-line"></i></button>
            </form>
        </div>
    </div>
    <!-- End Search Popup  -->


    <div class="edu-course-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="short-by">
                        <p>Showing <span>1-16</span> Of <span>42</span> Results</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="edu-search-box-wrapper text-start text-md-end">
                        <div class="edu-search-box">
                            <form action="#">
                                <input type="text" placeholder="Search Course...">
                                <button class="search-button"><i class="icon-search-line"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--10">

                <!-- Start Single Card  -->
                @foreach($courses as $course)
                    <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-4 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('front.course.details',['id'=>$course->id])}}">
                                        <img class="w-100" src="{{asset($course->image)}}" alt="Course Thumb">
                                    </a>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-04">Featured</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="card-top">
                                        <div class="author-meta">
                                            <div class="author-thumb">
                                                <a href="#">
                                                    @if(file_exists($course->teacher->image))
                                                        <img class="w-100" src="{{asset($course->image)}}" alt="Course Thumb">
                                                    @else
                                                        <img src="{{asset('frontEnd')}}/assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                                    @endif
                                                    <span class="author-title">{{$course->teacher->teacher_name}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="edu-meta meta-03">
                                        <li class="meta-lessons"><i class="icon-file-list-4-line"></i>8 Lessons</li>
                                        <li class="meta-clock"><i class="icon-time-line"></i>6 hr 14 min</li>
                                        <li class="meta-user"><i class="icon-group-line"></i>50K</li>
                                    </ul>
                                    <h6 class="title"><a href="{{route('front.course.details',['id'=>$course->id])}}">{{$course->course_title}}</a>
                                    </h6>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">{{$course->fee}}</div>
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span class="rating-count">(3)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single Card  -->


            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mt--60">--}}
{{--                    <nav>--}}
{{--                        <ul class="edu-pagination">--}}
{{--                            <li><a href="#"><i class="ri-arrow-drop-left-line"></i></a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li class="active"><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">...</a></li>--}}
{{--                            <li><a href="#">8</a></li>--}}
{{--                            <li><a href="#"><i class="ri-arrow-drop-right-line"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
