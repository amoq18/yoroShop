@extends('back.layouts.app')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Produits</h3>

                        <ul class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="index-2.html">Ecommerce</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Produits</li> --}}
                        </ul>
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <a href="#" title="Créer une publication" class="btn btn-primary">Créer</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="product">
                        <div class="product-inner">
                            <img alt="alt" src="/assets/back/img/product/product-01.jpg">
                            <div class="cart-btns">
                                <a href="{{ route('back.produits.details') }}" class="btn btn-outline-warning addcart-btn">Voir</a>
                                <a href="#" class="btn btn-outline-danger proedit-btn">Supprimer</a>
                            </div>
                        </div>
                        <div class="pro-desc">
                            <h5><a href="product-details.html">Apple MacBook Pro</a></h5>
                            <div class="price">$5528</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="product">
                        <div class="product-inner">
                            <img alt="alt" src="/assets/back/img/product/product-01.jpg">
                            <div class="cart-btns">
                                <a href="#" class="btn btn-outline-warning addcart-btn">Voir</a>
                                <a href="#" class="btn btn-outline-danger proedit-btn">Supprimer</a>
                            </div>
                        </div>
                        <div class="pro-desc">
                            <h5><a href="#">Apple MacBook Pro</a></h5>
                            <div class="price">$5528</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
