@extends('layouts.user')
@section('title', 'Home | Members')
@section('additional-css')
@endsection
<style type="text/css">
  img.selected_file {
    max-width: 100%;
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  .file_block {
    margin-bottom: 15px;
  }
</style>
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
  <div class="row">
    <div class="col-lg-6 col-md-5 col-sm-4" style="color: #fff;margin: 10px 0px;">
      <img src="{{ asset('images/K_Logo6.png') }}" height="40px" width="60px"> Kunnec |&nbsp;
    </div>
    <div class="col-lg-6 col-md-7 col-sm-8 welcome_text">
      <small> Welcome {{Auth::user()->username}}, enjoy your day!</small>
    </div>
  </div>
</div>

<div class="row no-gutters">
    <div class="col-lg-8 pr-lg-2">
        <!-- Create post -->
        <div class="card mb-3">
            @if(session()->has('success'))
              <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-success">
                        <strong>{{ session('success') }}</strong>
                    </div>
                </div>
              </div>
            @endif
            @if(session()->has('error'))
              <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-danger">
                        <strong>{{ session('error') }}</strong>
                    </div>
                </div>
              </div>
            @endif
            <div class="card-header bg-light">
                <div class="media align-items-center">
                    <div class="avatar avatar-m">
                        <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                        <h5 class="mb-0 fs-0">
                           Create post
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <form method="POST" action="{{route('post.create')}}" enctype="multipart/form-data">
                    @csrf
                    <textarea class="form-control border-0 rounded-0 resize-none" type="text" placeholder="Type your post here!" rows="4" name="post_content"></textarea>
                    <span class="hws_error text-right text-danger" style="padding-left: 20px;">{{ $errors->first('post_content') }}</span>
                    <div class="d-flex align-items-center border-y px-3 mt-1">
                        <label class="text-nowrap mb-0 mr-2" for="hash-tags"><span class="fas fa-plus mr-1 fs--2"></span><span class="font-weight-regular">Add hashtag</span>
                        </label>
                        <input class="form-control border-0 fs--1" id="hash-tags" type="text" placeholder="Help the right person to see" name="tag"/>
                    </div>
                    <div class="row no-gutters justify-content-between mt-3 px-3 pb-3">
                        <div class="col-sm-12">
                          <label style="display: block;"><img class="cursor-pointer" src="{{asset('user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap / Video</span></label>
                          <input type="file" name="images[]" class="" id="images" multiple style="margin-bottom: 20px;">
                          <div class="post_files">
                            <div class="row">
                              {{--<div class="col-lg-4 file_block">
                                 <img src="http://localhost/kunnec/user-dash/images/users/profiles/1636973613_image.jpg" class="selected_file">
                              </div>--}}
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col">
                            <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0" type="button"><img class="cursor-pointer" src="{{asset('user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap</span></button>
                            <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1" type="button"><img class="cursor-pointer" src="{{asset('user-dash/images/illustrations/calendar.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Video</span></button>
                        </div> -->
                        
                        <div class="col-sm-12 text-right">
                          <div class="dropdown d-inline-block mr-1">
                              <input type="text" name="status" id="postStatus" value="public" readonly>
                              <button class="btn btn-sm dropdown-toggle px-1" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #009900" class="fas fa-globe-americas"></span>
                              </button>
                              
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item pstatus" href="#">Public</a>
                                <a class="dropdown-item pstatus" href="#">Private</a>
                                <a class="dropdown-item pstatus" href="#">Draft</a>
                              </div>
                          </div>
                          <button class="btn btn-success btn-sm px-4 px-sm-5" type="submit">Post</button>
                        </div>
                    </div>
                </form>
              </div>
        </div>
        <!-- Create post End -->
        <div class="card mb-3">
              <div class="card-header bg-light">
                <div class="row justify-content-between">
                  <div class="col">
                        <div class="media">
                              <div class="avatar avatar-2xl status-online">
                                   <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/4.jpg')}}" alt="" />
                              </div>
                              <div class="media-body align-self-center ml-2">
                                 <p class="mb-1 line-height-1">
                                      <a class="font-weight-semi-bold" href="#"> 
                                         Rowan Atkinson
                                      </a> 
                                      shared an <a href="#">album</a>
                                  </p>
                                  <p class="mb-0 fs--1">
                                       11 hrs &bull; Consett, UK &bull; 
                                       <span style="color: #009900" class="fas fa-globe-europe"></span>
                                  </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-auto">
                        <div class="dropdown text-sans-serif">
                              <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-album-action">
                                <div class="bg-white py-3">
                                  <a class="dropdown-item" href="#">View</a>
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Report</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item text-warning" href="#">Archive</a>
                                  <a class="dropdown-item text-danger" href="#">Delete </a>
                                </div>
                              </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="card-body overflow-hidden">
                <p>Rowan Sebastian Atkinson CBE is an English actor, comedian and screenwriter best known for his work on the sitcoms Blackadder and Mr. Bean.</p>
                <div class="row mx-n1">
                      <div class="col-6 p-1">
                          <a href="#" data-fancybox="gallery" data-caption="Image caption">
                              <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/22.jpg')}}" alt="" />
                          </a>
                      </div>
                      <div class="col-6 p-1">
                          <a href="#" data-fancybox="gallery" data-caption="Image caption">
                              <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/21.jpg')}}" alt="" />
                          </a>
                      </div>
                      <div class="col-4 p-1">
                          <a href="#" data-fancybox="gallery" data-caption="Image caption">
                              <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/4.jpg')}}" alt="" />
                          </a>
                      </div>
                      <div class="col-4 p-1">
                          <a href="#" data-fancybox="gallery" data-caption="Image caption">
                              <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/5.jpg')}}" alt="" />
                          </a>
                      </div>
                      <div class="col-4 p-1">
                          <a href="#" data-fancybox="gallery" data-caption="Image caption">
                              <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/3.jpg')}}" alt="" />
                          </a>
                      </div>
                </div>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="border-bottom border-200 fs--1 py-3">
                   <a class="text-700" href="#">345 Likes</a> &bull; <a class="text-700" href="#">34 Comments</a>
                </div>
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3" href="#">
                              <img src="{{asset('user-dash/images/illustrations/like-active.png')}}" width="20" alt="" />
                              <span class="ml-1">Like</span>
                          </a>
                      </div>
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3" href="#">
                              <img src="{{asset('user-dash/images/illustrations/comment-active.png')}}" width="20" alt="" />
                              <span class="ml-1">Comment</span>
                          </a>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                          <a class="rounded text-700 d-flex align-items-center" href="#">
                              <img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Share</span>
                          </a>
                      </div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                      <div class="avatar avatar-xl">
                         <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                      </div>
                      <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
                <div class="media mt-3">
                      <div class="avatar avatar-xl">
                         <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/4.jpg')}}" alt="" />
                      </div>
                      <div class="media-body ml-2 fs--1">
                            <p class="mb-1 bg-200 rounded-soft p-2">
                                  <a class="font-weight-semi-bold" href="#">Rowan Atkinson</a> 
                                  She starred as Jane Porter in The <a href="#">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.
                            </p>
                            <div class="px-2">
                               <a href="#">Like</a> &bull; <a href="#">Reply</a> &bull; 23min 
                           </div>
                      </div>
                </div>
                <div class="media mt-3">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/3.jpg')}}" alt="" />
                      </div>
                      <div class="media-body ml-2 fs--1">
                            <p class="mb-1 bg-200 rounded-soft p-2">
                              <a class="font-weight-semi-bold" href="">Jessalyn Gilsig</a> 
                                  Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆
                              </p>
                            <div class="px-2"><a href="#">Like</a> &bull; <a href="#">Reply</a> &bull; 3hrs </div>
                      </div>
                </div>
                <a class="fs--1 text-700 d-inline-block mt-2" href="#">Load more comments (2 of 34)</a>
              </div>
        </div>
        <div class="card mb-3">
              <div class="card-header bg-light">
                <div class="row justify-content-between">
                    <div class="col">
                    <div class="media">
                        <div class="avatar avatar-2xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/15.jpg')}}" alt="" />

                        </div>
                        <div class="media-body align-self-center ml-2">
                        <p class="mb-1 line-height-1"><a class="font-weight-semi-bold" href="#">Margot Robbie</a></p>
                        <p class="mb-0 fs--1">Yesterday &bull; Dalby, AUS &bull; <span style="color: #009900" class="fas fa-globe-asia"></span></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-auto">
                    <div class="dropdown text-sans-serif">
                        <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-article-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-article-action">
                        <div class="bg-white py-3"><a class="dropdown-item" href="#">View</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Report</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#">Archive</a><a class="dropdown-item text-danger" href="#">Delete </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <p>
                      Margot Elise Robbie was born on July 2, 1990 in Dalby, Queensland, Australia to Scottish parents. Her mother, Sarie Kessler, is a physiotherapist, and her father, is Doug Robbie. She comes from a family of four children, having two brothers and one sister. She graduated from Somerset College in Mudgeeraba, Queensland, Australia, a suburb in the Gold Coast hinterland of South East Queensland, where she and her siblings were raised by their mother and spent much of her time at the farm belonging to her grandparents. In her late teens, she moved to Melbourne, Victoria, Australia to pursue an acting career.
                </p>
                <p>
                      From 2008-2010, Robbie played the character of Donna Freedman in the long-running Australian soap opera, Neighbours (1985), for which she was nominated for two Logie Awards. She set off to pursue Hollywood opportunities, quickly landing the role of Laura Cameron on the short-lived ABC series, Pan Am (2011). She made her big screen debut in the film, About Time (2013).
                </p>
                <p>
                      Robbie rose to fame co-starring alongside Leonardo DiCaprio, portraying the role of Naomi Lapaglia in Martin Scorsese's Oscar-nominated film, The Wolf of Wall Street (2013). She was nominated for a Breakthrough Performance MTV Movie Award, and numerous other awards.
                </p>
                <p>
                      In 2014, Robbie founded her own production company, LuckyChap Entertainment. She also appeared in the World War II romantic-drama film, Suite Française (2014). She starred in Focus (2015) and Z for Zachariah (2015), and made a cameo in The Big Short (2015).
                </p>
                <p>
                      In 2016, she married Tom Ackerley in Byron Bay, New South Wales, Australia.
                </p>
                <p>
                      She starred as Jane Porter in The Legend of Tarzan (2016), Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.
                </p>
                <p>
                      She portrayed figure skater Tonya Harding in the biographical film I, Tonya (2017), receiving critical acclaim and a Golden Globe Award nomination for Best Actress - Motion Picture Comedy or Musical.
               </p>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="border-bottom border-200 fs--1 py-3">
                   <a class="text-700" href="#">34 Comments</a>
                </div>
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/like-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Like</span>
                          </a>
                      </div>
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3" href="#">
                              <img src="{{asset('user-dash/images/illustrations/comment-active.png')}}" width="20" alt="" />
                              <span class="ml-1">Comment</span>
                          </a>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                          <a class="rounded text-700 d-flex align-items-center" href="#">
                              <img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Share</span>
                          </a>
                      </div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                      </div>
                      <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
                <div class="media mt-3">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/4.jpg')}}" alt="" />
                      </div>
                      <div class="media-body ml-2 fs--1">
                        <p class="mb-1 bg-200 rounded-soft p-2">
                              <a class="font-weight-semi-bold" href="#">Rowan Atkinson</a> 
                              She starred as Jane Porter in The <a href="#">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.
                        </p>
                        <div class="px-2">
                            <a href="#">Like</a> &bull; <a href="#">Reply</a> &bull; 23min 
                        </div>
                      </div>
                </div>
                <div class="media mt-3">
                      <div class="avatar avatar-xl">
                          <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/3.jpg')}}" alt="" />
                      </div>
                      <div class="media-body ml-2 fs--1">
                         <p class="mb-1 bg-200 rounded-soft p-2">
                           <a class="font-weight-semi-bold" href="#">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆
                        </p>
                        <div class="px-2">
                            <a href="#">Like</a> &bull; <a href="#">Reply</a> &bull; 3hrs 
                        </div>
                      </div>
                </div><a class="fs--1 text-700 d-inline-block mt-2" href="#">Load more comments (2 of 34)</a>
              </div>
        </div>
        <div class="card mb-3">
              <img class="card-img-top" src="{{asset('user-dash/images/users/gallery/13.jpg')}}" alt="" />
              <div class="card-body overflow-hidden">
                <div class="row justify-content-between align-items-center">
                      <div class="col">
                        <div class="media">
                              <div class="calendar mr-2">
                                  <span class="calendar-month">Dec</span><span class="calendar-day">31 </span>
                              </div>
                              <div class="media-body fs--1">
                                <h5 class="fs-0">
                                    <a href="#">FREE New Year's Eve Midnight Harbor Fireworks</a>
                                </h5>
                                <p class="mb-0">by <a href="#">Boston Harbor Now</a></p>
                                <span class="fs-0 text-warning font-weight-semi-bold">$49.99 – $89.99</span>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-auto d-none d-md-block">
                          <button class="btn btn-success btn-sm px-4" type="button">Register</button>
                      </div>
                </div>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/like-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Like</span>
                          </a>
                      </div>
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/comment-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Comment</span>
                          </a>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                          <a class="rounded text-700 d-flex align-items-center" href="#">
                              <img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Share</span>
                          </a>
                      </div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                      <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                      </div>
                      <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
              </div>
        </div>
        <div class="card mb-3">
              <div class="card-header bg-light">
                <div class="row justify-content-between">
                      <div class="col">
                        <div class="media">
                              <div class="avatar avatar-2xl">
                                <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/10.jpg')}}" alt="" />
                              </div>
                              <div class="media-body align-self-center ml-2">
                                <p class="mb-1 line-height-1">
                                      <a class="font-weight-semi-bold" href="#">Leonardo DiCaprio</a> shared a <a href="#">photo</a>
                                  </p>
                                <p class="mb-0 fs--1">
                                      13 Jan &bull; LA, US &bull; <span style="color: #009900" class="fas fa-globe-americas">
                                </p>
                              </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="dropdown text-sans-serif">
                              <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-image-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="fas fa-ellipsis-h fs--1"></span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-image-action">
                                <div class="bg-white py-3">
                                  <a class="dropdown-item" href="#">View</a>
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Report</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item text-warning" href="#">Archive</a>
                                  <a class="dropdown-item text-danger" href="#">Delete </a>
                                </div>
                              </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="card-body overflow-hidden">
                  <a href="{{asset('user-dash/images/users/gallery/11.jpg')}}" data-fancybox="" data-caption="Image caption">
                      <img class="rounded w-100" src="{{asset('user-dash/images/users/gallery/11.jpg')}}" alt="" />
                  </a>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/like-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Like</span>
                          </a>
                      </div>
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/comment-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Comment</span>
                          </a>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                          <a class="rounded text-700 d-flex align-items-center" href="#">
                              <img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Share</span>
                          </a>
                      </div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                      </div>
                      <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
              </div>
        </div>
        <div class="card mb-3">
              <div class="card-header bg-light">
                <div class="row justify-content-between">
                  <div class="col">
                    <div class="media">
                      <div class="avatar avatar-2xl">
                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/8.jpg')}}" alt="" />

                      </div>
                      <div class="media-body align-self-center ml-2">
                        <p class="mb-1 line-height-1"><a class="font-weight-semi-bold" href="../pages/profile.html">Johnny Depp</a> shared a <a href="#">video</a></p>
                        <p class="mb-0 fs--1">Just Now &bull; Paris &bull; <span style="color: #009900" class="fas fa-globe-africa"></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="dropdown text-sans-serif">
                      <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-video-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                      <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-video-action">
                        <div class="bg-white py-3"><a class="dropdown-item" href="#">View</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#">Archive</a><a class="dropdown-item text-danger" href="#">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p>See the sport of surfing as it’s never been captured before in John Florence and Blake Vincent Kueny’s second signature release, in association with the award-winning film studio, Brain Farm. The first surf film shot entirely in 4K, View From a Blue Moon. 🤩 🌎 🎬</p>
                <div class="rounded-soft overflow-hidden">
                      <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
                  </div>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                  <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#"><img src="{{asset('user-dash/images/illustrations/like-inactive.png')}}" width="20" alt="" /><span class="ml-1">Like</span></a></div>
                  <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#"><img src="{{asset('user-dash/images/illustrations/comment-inactive.png')}}" width="20" alt="" /><span class="ml-1">Comment</span></a></div>
                  <div class="col-auto d-flex align-items-center"><a class="rounded text-700 d-flex align-items-center" href="#"><img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" /><span class="ml-1">Share</span></a></div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />

                  </div>
                  <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
              </div>
        </div>
        <div class="card">
              <div class="card-header bg-light">
                    <div class="row justify-content-between">
                          <div class="col">
                                <div class="media">
                                      <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/17.jpg')}}" alt="" />
                                      </div>
                                      <div class="media-body align-self-center ml-2">
                                          <p class="mb-1 line-height-1">
                                              <a class="font-weight-semi-bold" href="../pages/profile.html">Emilia Clarke</a> shared a <a href="#">url</a>
                                          </p>
                                          <p class="mb-0 fs--1">
                                              14 Feb &bull; London &bull; <span style="color: #009900" class="fas fa-globe-europe"></span>
                                          </p>
                                      </div>
                                </div>
                          </div>
                          <div class="col-auto">
                            <div class="dropdown text-sans-serif">
                                  <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-url-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-url-action">
                                    <div class="bg-white py-3">
                                      <a class="dropdown-item" href="#">View</a>
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Report</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item text-warning" href="#">Archive</a>
                                      <a class="dropdown-item text-danger" href="#">Delete </a>
                                    </div>
                                  </div>
                            </div>
                          </div>
                    </div>
              </div>
              <div class="card-body overflow-hidden">
                    <p>Mount Everest, known in Nepali as Sagarmatha and in Tibetan as Chomolungma, is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. The international border between Nepal and China runs across its summit point.</p>
                    <a class="text-decoration-none" href="#">
                          <img class="img-fluid rounded" src="{{asset('user-dash/assets/img/generic/12.jpg')}}" alt="" />
                          <small class="text-uppercase text-700">en.wikipedia.org</small>
                          <h6 class="fs-0 mb-0">Mount Everest: Facts & Location of World's Highest Mountain</h6>
                          <p class="fs--1 mb-0 text-700">The Himalayan range has many of the Earth's highest peaks, including the highest, Mount Everest...</p>
                    </a>
              </div>
              <div class="card-footer bg-light pt-0">
                <div class="border-bottom border-200 fs--1 py-3">
                  <a class="text-700" href="#">345 Likes</a>
                </div>
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3" href="#">
                              <img src="{{asset('user-dash/images/illustrations/like-active.png')}}" width="20" alt="" />
                              <span class="ml-1">Like</span>
                          </a>
                      </div>
                      <div class="col-auto">
                          <a class="rounded d-flex align-items-center mr-3 text-700" href="#">
                              <img src="{{asset('user-dash/images/illustrations/comment-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Comment</span>
                          </a>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                          <a class="rounded text-700 d-flex align-items-center" href="#">
                              <img src="{{asset('user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                              <span class="ml-1">Share</span>
                          </a>
                      </div>
                </div>
                <form class="d-flex align-items-center border-top border-200 pt-3">
                      <div class="avatar avatar-xl">
                         <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                      </div>
                      <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                </form>
            </div>
        </div>
      </div>
      <!-- right side bar for users list -->
      <div class="col-lg-4 pl-lg-2">
        <div class="card">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">You May Know ...</h5><a class="fs--1" href="{{ url('may_know') }}">See all</a>
            </div>
            <div class="card-body">
              <div class="media">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/5.jpg')}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                      <h6 class="mb-0">
                           <a href="../pages/profile.html">Travis Fimmel</a>
                       </h6>
                      <p class="fs--1 mb-0">5 mutual Kunnecs</p>
                      <button class="btn btn-outline-success btn-sm" type="button" style="border-radius:16px;">
                            <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Kunnec To</span>
                      </button>
                      <hr class="border-bottom-0 border-dashed">
                    </div>
              </div>
              <div class="media">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/10.jpg')}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                      <h6 class="mb-0">
                          <a href="../pages/profile.html">Gustaf Skarsgård</a>
                      </h6>
                      <p class="fs--1 mb-0">10 mutual Kunnecs</p>
                      <button class="btn btn-outline-success btn-sm" type="button" style="border-radius:16px;">
                        <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Kunnec To</span>
                      </button>
                      <hr class="border-bottom-0 border-dashed">
                    </div>
              </div>
              <div class="media">
                    <div class="avatar avatar-3xl">
                       <img class="rounded-circle" src="{{asset('user-dash/images/users/profiles/8.jpg')}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                      <h6 class="mb-0">
                           <a href="../pages/profile.html">Clive Standen</a>
                       </h6>
                      <p class="fs--1 mb-0">8 mutual Kunnecs</p>
                      <button class="btn btn-outline-success btn-sm" type="button" style="border-radius:16px;">
                        <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span>
                        <span class="fs--1">Kunnec To</span>
                      </button>
                      <hr class="border-bottom-0 border-dashed">
                    </div>
              </div>
            </div>
        </div>
        <div class="card mt-4 mb-3 mb-lg-0">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        Event Invites
                    </h5>
                </div>
                <div class="card-body fs--1">
                  <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="#">Newmarket Nights</a></h6>
                          <p class="mb-1">Organized by <a href="#" class="text-700">University of Oxford</a></p>
                          <p class="text-1000 mb-0">Time: 6:00AM</p>
                          <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                          <hr class="border-dashed border-bottom-0" />
                        </div>
                  </div>
                  <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="#">31st Night Celebration</a></h6>
                          <p class="mb-1">Organized by <a href="#" class="text-700">Chamber Music Society</a></p>
                          <p class="text-1000 mb-0">Time: 11:00PM</p>
                          <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                          <hr class="border-dashed border-bottom-0" />
                        </div>
                  </div>
                  <div class="media btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                        <div class="media-body position-relative pl-3">
                          <h6 class="fs-0 mb-0"><a href="#">Folk Festival</a></h6>
                          <p class="mb-1">Organized by <a href="#" class="text-700">Harvard University</a></p>
                          <p class="text-1000 mb-0">Time: 9:00AM</p>
                          <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                        </div>
                  </div>
                </div>
                <div class="card-footer bg-light py-0 border-top">
                    <a class="btn btn-link btn-block" href="#" style="color: #009900;">All Events
                        <span class="fas fa-chevron-right ml-1 fs--2"></span>
                    </a>
                </div>
        </div>
      </div>
      <!-- End right side bar for users list -->
<div>
@endsection
@section('additional-js')
@endsection