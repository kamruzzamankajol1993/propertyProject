<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('home')  ? '' : 'collapsed' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->






      <li class="nav-heading">Service Detail</li>

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceTitle.index')  ? '' : 'collapsed' }}" href="{{ route('serviceTitle.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service Title</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('service.index')  ? '' : 'collapsed' }}" href="{{ route('service.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceDetail.index')  ? '' : 'collapsed' }}" href="{{ route('serviceDetail.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Builder</span>
        </a>
    </li>

    <li class="nav-heading">Property Image Detail</li>


    {{-- <li class="nav-item ">
      <a class="nav-link {{ Route::is('portfolio.index')  ? '' : 'collapsed' }}" href="{{ route('portfolio.index') }}">
        <i class="bx bx-file-blank"></i>
        <span>Portfolio Category</span>
      </a>
    </li> --}}


    <li class="nav-item ">
      <a class="nav-link {{ Route::is('portfolioDetail.index')  ? '' : 'collapsed' }}" href="{{ route('portfolioDetail.index') }}">
        <i class="bx bx-file-blank"></i>
        <span>Property Image</span>
      </a>
    </li><!-- End Profile Page Nav -->
      {{-- <li class="nav-item ">
        <a class="nav-link {{ Route::is('servicePrice.index')  ? '' : 'collapsed' }}" href="{{ route('servicePrice.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Builder</span>
        </a>
      </li> --}}



      {{-- <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceOrder.index')  ? '' : 'collapsed' }}" href="{{ route('serviceOrder.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Ordered Service</span>
        </a>
      </li> --}}





 <li class="nav-heading">Website</li>




      <li class="nav-item ">
        <a class="nav-link {{ Route::is('bannerList.index')  ? '' : 'collapsed' }}" href="{{ route('bannerList.index') }}">
          <i class="bi bi-image"></i>
          <span>Banner List</span>
        </a>
      </li><!-- End Profile Page Nav -->




            <li class="nav-item ">
        <a class="nav-link {{ Route::is('socialLink.index')  ? '' : 'collapsed' }}" href="{{ route('socialLink.index') }}">
          <i class="bx bx-world"></i>
          <span>Social Link</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item ">
        <a class="nav-link {{ Route::is('homePageContact.index')  ? '' : 'collapsed' }}" href="{{ route('homePageContact.index') }}">
          <i class="bx bx-paste"></i>
          <span>Home Page Content</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('aboutus.index')  ? '' : 'collapsed' }}" href="{{ route('aboutus.index') }}">
          <i class="bx bxs-user-badge"></i>
          <span>About Us(Home Page)</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('frequentlyAskPartOne.index')  ? '' : 'collapsed' }}" href="{{ route('frequentlyAskPartOne.index') }}">
          <i class="bx bx-comment-add"></i>
          <span>Video(Home Page)</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('frequentlyAskPartTwo.index')  ? '' : 'collapsed' }}" href="{{ route('frequentlyAskPartTwo.index') }}">
          <i class="bx bx-comment-detail"></i>
          <span>Frequently Ask </span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('testimonialPartOne.index')  ? '' : 'collapsed' }}" href="{{ route('testimonialPartOne.index') }}">
          <i class="bx bxs-comment-detail"></i>
          <span>Testimonial Part One</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('testimonialPartTwo.index')  ? '' : 'collapsed' }}" href="{{ route('testimonialPartTwo.index') }}">
          <i class="bx bxs-detail"></i>
          <span>Testimonial Part Two</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('chooseUs.index')  ? '' : 'collapsed' }}" href="{{ route('chooseUs.index') }}">
          <i class="bx bxs-folder-plus"></i>
          <span>About Us (Main Page)</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-item ">
        <a class="nav-link {{ Route::is('projectCount.index')  ? '' : 'collapsed' }}" href="{{ route('projectCount.index') }}">
          <i class="bx bx-notepad"></i>
          <span>Project Count</span>
        </a>
      </li> --}}


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('newsList.index')  ? '' : 'collapsed' }}" href="{{ route('newsList.index') }}">
          <i class="bx bxs-news"></i>
          <span>News List</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('clientLogo.index')  ? '' : 'collapsed' }}" href="{{ route('clientLogo.index') }}">
          <i class="bx bxs-news"></i>
          <span>Client Logo List</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-heading">Property Image Detail</li>


      {{-- <li class="nav-item ">
        <a class="nav-link {{ Route::is('portfolio.index')  ? '' : 'collapsed' }}" href="{{ route('portfolio.index') }}">
          <i class="bx bx-file-blank"></i>
          <span>Portfolio Category</span>
        </a>
      </li> --}}


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('portfolioDetail.index')  ? '' : 'collapsed' }}" href="{{ route('portfolioDetail.index') }}">
          <i class="bx bx-file-blank"></i>
          <span>Property Image</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-heading">Team</li>


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('team.index')  ? '' : 'collapsed' }}" href="{{ route('team.index') }}">
          <i class="bx bxs-user-account"></i>
          <span>Team List</span>
        </a>
      </li>


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('teamDetail.index')  ? '' : 'collapsed' }}" href="{{ route('teamDetail.index') }}">
          <i class="bx bxs-user-plus"></i>
          <span>Team Detail List</span>
        </a>
      </li> --}}




      <li class="nav-heading">Contact Page </li>

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('messagePartOne.index')  ? '' : 'collapsed' }}" href="{{ route('messagePartOne.index') }}">
          <i class="bx bx-message-alt-detail"></i>
          <span>



            Cantact Page Content



              </span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('message.index')  ? '' : 'collapsed' }}" href="{{ route('message.index') }}">
          <i class="bx bx-message-alt-detail"></i>
          <span>

              @if($allMessageListCount == 0 )

               Message List

              @else

              Message List ({{$allMessageListCount}})

              @endif

              </span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-heading">Other</li>

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('systemInformation.index')  ? '' : 'collapsed' }}" href="{{ route('systemInformation.index') }}">
          <i class="bi bi-gear-fill"></i>
          <span>System Info</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('termAndCondition.index')  ? '' : 'collapsed' }}" href="{{ route('termAndCondition.index') }}">
          <i class="bx bx-file"></i>
          <span>Term & Condition</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link  {{ Route::is('privacyPolicy.index')  ? '' : 'collapsed' }}" href="{{ route('privacyPolicy.index') }}">
          <i class="bx bx-detail"></i>
          <span>Privacy Policy</span>
        </a>
      </li><!-- End Profile Page Nav -->



    </ul>

  </aside>
