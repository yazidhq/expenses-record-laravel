@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-12 px-md-4 mt-3">
    <h2">{{ auth()->user()->name}}'s Profile</h2>

        <hr>

        <section>
            <div class="h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('storage/image/' . auth()->user()->avatar) }}"
                                        class="rounded-circle img-fluid" style="width: 100px;" />
                                </div>
                                <h4 class="mb-2" data-aos="fade-up" data-aos-delay="100">{{ auth()->user()->name}}
                                </h4>
                                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="100">{{
                                    auth()->user()->email}}</p>
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                    data-bs-target="#userAva{{ auth()->user()->id }}">
                                    Edit Profile
                                </button>
                                @error('avatar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <!-- Modal Edit Profile -->
                                <div class="modal fade" id="userAva{{ auth()->user()->id }}" tabindex="-1"
                                    aria-labelledby="userAvaLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="userAvaLabel">{{ auth()->user()->name }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('user.update', auth()->user()->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mt-3 mb-4">
                                                        <img src="{{ asset('storage/image/' . auth()->user()->avatar) }}"
                                                            class="rounded-circle img-fluid" id="currentImage"
                                                            style="width: 100px;" alt="Avatar">
                                                        <div class="card-title">
                                                            <input type="file" id="avatar" name="avatar"
                                                                style="display: none;">
                                                        </div>
                                                        <label for="avatar">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Your Name" value="{{ auth()->user()->name }}">
                                                    <br>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Your Email" value="{{ auth()->user()->email }}">
                                                    <br>
                                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <p class="mb-2 h5">Rp. {{number_format((float)$monthlyIncome->sum('amount'), 0,
                                            ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Monthly Income</p>
                                    </div>
                                    <div class="px-3" data-aos="fade-up" data-aos-delay="150">
                                        <p class="mb-2 h5">Rp. {{ number_format((float)$monthlyExpenses->sum('amount'),
                                            0, ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Monthly Expenses</p>
                                    </div>
                                    <div data-aos="fade-up" data-aos-delay="200">
                                        <p class="mb-2 h5">Rp. {{ number_format((float)$todayExpenses->sum('amount'), 0,
                                            ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Today Expenses</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $("#avatar").change(function() {
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#currentImage").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>

@stop