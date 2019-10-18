@extends('back.layouts.app')

@section('content')
    <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Product Details</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="product-view">
                                        <div class="proimage-wrap">
                                            <div class="pro-image" id="pro_popup">
                                                <a href="/assets/back/img/product/product-01.jpg">
                                                    <img class="img-fluid" src="/assets/back/img/product/product-01.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            <ul class="proimage-thumb">
                                                <li>
                                                    <a href="/assets/back/img/product/product-01.jpg"><img src="/assets/back/img/product/product-thumb-01.jpg" alt="Product Image"></a>
                                                </li>
                                                <li>
                                                    <a href="/assets/back/img/product/product-09.jpg"><img src="/assets/back/img/product/product-thumb-09.jpg" alt="Product Image"></a>
                                                </li>
                                                <li>
                                                    <a href="/assets/back/img/product/product-10.jpg"><img src="/assets/back/img/product/product-thumb-10.jpg" alt="Product Image"></a>
                                                </li>
                                                <li>
                                                    <a href="/assets/back/img/product/product-11.jpg"><img src="/assets/back/img/product/product-thumb-11.jpg" alt="Product Image"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="product-info">
                                        <h2>Apple MacBook Pro</h2>
                                        <p class="mb-0">Product ID: PRO-0001</p>
                                        <div class="rating">
                                            <p>
                                                <span><i class="fa fa-star rated"></i></span>
                                                <span><i class="fa fa-star rated"></i></span>
                                                <span><i class="fa fa-star rated"></i></span>
                                                <span><i class="fa fa-star rated"></i></span>
                                                <span><i class="fa fa-star-o "></i></span>
                                                <span>/ Reviews (3)</span>
                                            </p>
                                        </div>
                                        <p class="product_price">$5528</p>
                                        <p><b>Availability:</b> In Stock</p>
                                        <div>
                                            <a href="{{ route('back.produits.update') }}">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-shopping-cart"></i> Modifier
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <ul class="nav nav-tabs nav-tabs-bottom">
                                        <li class="nav-item"><a class="nav-link active" href="#product_desc" data-toggle="tab">Description</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#product_reviews" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="product_desc">
                                            <div class="product-content">
                                                <p>The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen; and the 13-inch, with a 13.3-inch screen. Apple splits the MacBook Pro into a 13-inch and a 15-inch, with the latter consisting of a 15.4-inch screen. Each computer has a full-size, backlit 78-key keyboard.</p>
                                                <p>Apple bundles each MacBook with the OS X operating system. On each computer there's a dual-core processor from Intel’s Intel Core brand, with Turbo Boost technology for increased performance. Each MacBook Air gets a mid-range Intel Core i5, with a processing speed of 1.7 or 1.8 GHz. The 13-inch MacBook Pro has a 2.5- or 2.9-GHz chip, while the one on the 15-inch MacBook Pro is a more powerful but slower 2.3 GHz quad-core Intel Core i7. Peak installed memory on the MacBook Air is 8GB, with 1600MHz DDR3 architecture.</p>
                                                <p>The built-in Intel HD Graphics 4000 handles basic video duties, with the 15-inch MacBook Pro getting a more advanced NVIDIA GeForce GT 650M. Audio specifications include stereo speakers and a headphone port, with one omnidirectional microphone on the MacBook Air and two on the MacBook Pro. Wireless technology on the MacBook consists of Bluetooth 4.0 wireless technology for streaming audio and a Wi-Fi network adapter that enables Web browsing. Also included is a FaceTime Camera with a peak resolution of 720 pixels. For storage, the MacBook Air has a 64- or 128-GB flash drive, while the MacBook Pro has 500 or 750GB of hard drive space. Added on the MacBook Pro is an 8x Super Drive slot for playing CDs and DVDs.</p>
                                                <p>Apart from the aforementioned headphone jack, each MacBook has at least one port for the power adapter, two USB 3.0 ports and Apple/Intel’s Thunderbolt interface. A Secure Digital flash memory card slot is present on all models but the 11-inch MacBook Air. Exclusive to the MacBook Pro are an Ethernet port for wired internet connection, FireWire 800 port for data transfer and an anti-theft device called Kensington Security Slot. The 15-inch MacBook Pro is the only model with audio line-in and audio line-out jacks for recording purposes.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="product_reviews">
                                            <div class="product-reviews">
                                                <h4 class="mb-3">Reviews (3)</h4>
                                                <ul class="review-list">
                                                    <li>
                                                        <div class="review">
                                                            <div class="review-author">
                                                                <img class="avatar" alt="User Image" src="/assets/back/img/profiles/avatar-09.jpg">
                                                            </div>
                                                            <div class="review-block">
                                                                <div class="review-by">
                                                                    <span class="review-author-name">Mark Boydston</span>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>
                                                                <p>With great power comes great capability</p>
                                                                <span class="review-date">Feb 6, 2019</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="review">
                                                            <div class="review-author">
                                                                <img class="avatar" alt="User Image" src="/assets/back/img/profiles/avatar-10.jpg">
                                                            </div>
                                                            <div class="review-block">
                                                                <div class="review-by">
                                                                    <span class="review-author-name">Tori Carter</span>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                    </div>
                                                                </div>
                                                                <p>True value for money</p>
                                                                <span class="review-date">Jan 29, 2019</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="review">
                                                            <div class="review-author">
                                                                <img class="avatar" alt="User Image" src="/assets/back/img/profiles/avatar-11.jpg">
                                                            </div>
                                                            <div class="review-block">
                                                                <div class="review-by">
                                                                    <span class="review-author-name">Julie Rodriguez</span>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star rated"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>
                                                                <p>Excellent quality and Excellent Battery Backup</p>
                                                                <span class="review-date">Dec 13, 2018</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="all-reviews">
                                                    <button type="button" class="btn btn-primary">View All Reviews</button>
                                                </div>
                                            </div>
                                            <div class="product-write-review">
                                                <h4 class="mb-3">Write Review</h4>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label>Name <span class="text-red">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your email address <span class="text-red">*</span></label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Rating <span class="text-red">*</span></label>
                                                                <div class="rating">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Review Comments</label>
                                                                <textarea rows="4" class="form-control"></textarea>
                                                            </div>
                                                            <div class="review-submit">
                                                                <input type="submit" value="Submit" class="btn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
