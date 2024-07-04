@extends('layout.web')
@section('title','Gallery')
@section('content')
<x-banner title="Gallery" />

<div class="lgx-page-wrapper">
    <div class="container">
        <div class="lgx-col" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));">
            <div class="lgx-single-speacial lgx-card-single">
                <figure>
                    <a href="#" data-toggle="modal" data-target="#modal1"><img src="assets/img/gallery/gallery-003.png" alt="Offers" /></a>
                </figure>
                <div class="speacial-info">
                    <h3 class="title"><a href="#" data-toggle="modal" data-target="#modal1">American Burger Specialty</a></h3>
                </div>
            </div>

            <div class="lgx-single-speacial lgx-card-single">
                <figure>
                    <a href="#" data-toggle="modal" data-target="#modal2"><img src="assets/img/gallery/gallery-001.png" alt="Offers" /></a>
                </figure>
                <div class="speacial-info">
                    <h3 class="title"><a href="#" data-toggle="modal" data-target="#modal2">Special Chicken Burger Specialty</a></h3>
                </div>
            </div>

            <div class="lgx-single-speacial lgx-card-single">
                <figure>
                    <a href="#" data-toggle="modal" data-target="#modal3"><img src="assets/img/gallery/gallery-002.png" alt="Offers" /></a>
                </figure>
                <div class="speacial-info">
                    <h3 class="title"><a href="#" data-toggle="modal" data-target="#modal3">Special Chicken Burger Specialty</a></h3>
                </div>
            </div>

            <div class="lgx-single-speacial lgx-card-single">
                <figure>
                    <a href="#" data-toggle="modal" data-target="#modal4"><img src="assets/img/gallery/gallery-003.png" alt="Offers" /></a>
                </figure>
                <div class="speacial-info">
                    <h3 class="title"><a href="#" data-toggle="modal" data-target="#modal4">Special Chicken Burger Specialty</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Title" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: fit-content">
        <div class="modal-content">
            <div class="modal-body">
                <img src="assets/img/gallery/gallery-003.png" class="img-fluid" height="400px" width="400px" alt="American Burger Specialty">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Title" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: fit-content">
        <div class="modal-content">
            <div class="modal-body">
                <img src="assets/img/gallery/gallery-002.png" class="img-fluid" height="400px" width="400px" alt="American Burger Specialty">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Title" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: fit-content">
        <div class="modal-content">
            <div class="modal-body">
                <img src="assets/img/gallery/gallery-003.png" class="img-fluid" height="400px" width="400px" alt="American Burger Specialty">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Title" aria-hidden="true">
    <div class="modal-dialog" role="document"  style="width: fit-content">
        <div class="modal-content">
            <div class="modal-body">
                <img src="assets/img/gallery/gallery-003.png" class="img-fluid" height="400px" width="400px" alt="Special Chicken Burger Specialty">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Repeat similar structure for other modals -->


@endsection
