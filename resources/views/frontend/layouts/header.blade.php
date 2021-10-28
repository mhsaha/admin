<!--Header Section -->
<section class="header">
       <div class="container">

        <nav class="navbar navbar-expand-md navbar-light">
            <a href="{{url('')}}" class="navbar-brand"> <img src="{{asset('public/upload/logo_images/' .$logo->image)}}" style="height: 47px;"></a>
            <button type="button" class="navbar-toggler" data-tpggle="collapse"
            data-target="#navbarCollaps"><span class='navbar-toggle-icon'> </span></button>
            <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                <div class="navbar-nav popular">
                    <a href="{{url('')}}" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle"data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu" style="background: #BADDFB;">
                            <a href="{{route('about.us')}}" class="dropdown-item">About Us</a>
                            <a href="{{route('our.mission')}}" class="dropdown-item">Mission</a>
                            <a href="{{route('our.vision')}}" class="dropdown-item">Vision</a>



                        </div>
                    </div>
                   <a href="{{route('our.news.events')}}" class="nav-item nav-link"> News and Events</a>
                   <a href="{{route('contact.us')}}" class="nav-item nav-link"> contact-us</a>
                   <a href="" class="nav-item nav-link"> Login</a>
                </div>

                <div class="navbar-nav">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" placeholder="Search">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary">
                                    Search

                                </button>

                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </nav>

       </div>




   </section>