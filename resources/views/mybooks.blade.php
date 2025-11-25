<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saybabook</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mybook.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/Saybabook-ico.png') }}">
</head>

<body>
    @auth
        <section class="second-bg">
            @include('layouts.navbar')
            @include('layouts.menu')
            <div class="container-fluid" id="card-outer-container">
                <div id="card-outer-container">
                    <div class="row justify-content-start mx-auto" id="card-container">
                        @foreach ($publicBooks as $publicBook)
                            <div class="card" id="paginated-card">
                                <div class="row" id="small-card-btn">
                                    <div class="col-2">
                                        <button class="btn-small" id="small-ico"> <img class="small-ico-btn-user"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Added By:  {{ $publicBook->user->username}}"
                                                src="{{ asset('storage/' . $publicBook->user->image) }}"></button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-small" id="small-ico"> <img class="small-ico-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Your Books"
                                                src="{{ asset('icons/plus.png') }}"></button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-small" id="small-ico"> <img class="small-ico-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Archive This Book"
                                                src="{{ asset('icons/book.png') }}"></button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-small" id="small-ico"> <img class="small-ico-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite this Book"
                                                src="{{ asset('icons/star.png') }}"></button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-small" id="small-ico"> <img class="small-ico-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Online Link of the Book"
                                                src="{{ asset('icons/smallink.png') }}"></button>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/' . $publicBook->book_cover) }}" class="card-img-top"
                                    alt="{{ asset('storage/' . 'images/default_cover.png') }}">
                                <span class="card-title">{{ $publicBook->book_title }}</span>
                                <div class="card-body">
                                    <a type="button" href="#" data-bs-toggle="modal" data-bs-target="#bookDetailModal"
                                        data-book-title="{{ $publicBook->book_title }}"
                                        data-book-author="{{ $publicBook->book_author }}"
                                        data-book-genre="{{$publicBook->book_genre }}"
                                        data-book-category="{{$publicBook->book_category }}"
                                        data-book-privacy="{{$publicBook->book_privacy }}"
                                        data-book-online_link="{{$publicBook->book_online_link }}"
                                        data-book-date="{{$publicBook->date_added}}"
                                        data-book-ownerId="{{$publicBook->user->username }}"
                                        data-book-cover="{{'storage/' . $publicBook->book_cover}}"
                                        data-book-description="{{ $publicBook->book_description }}"
                                        data-book-id="{{ $publicBook->id }}" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>          
            </div>
            <div class="d-flex justify-content-center" id="pagination-container">
                <nav aria-label="Page navigation" id="card-pagination">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" data-page="prev">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-page="next">Next</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Navbar Menu Starts -->

            <div class="modal" tabindex="-1" id="bookDetailModal">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modalBodyContent">
                         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
    @else
        @endauth
    </section>


    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/detailview.js') }}"></script>
    <script src=" {{ asset('js/showtoast.js') }}"></script>
    <script src="{{ asset('js/pagination.js') }}"></script>
</body>

</html>