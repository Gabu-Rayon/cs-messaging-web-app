@extends('layout.app')
@section('content')


 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class=" col-lg-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Reply for Sender Id</h6>
                <form method="POST" action="/reply">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Reply</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <!-- <div class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Check me out
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Reply</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->


@endsection