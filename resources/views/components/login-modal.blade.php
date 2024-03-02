<div class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog  modal-dialog-centered modalZindex">
        <div class="modal-content modal-background border rounded-4 ">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Log in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/login" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email" class="text-white">Email</label>
                            <input type="email" name="email" id="email" class="form-control rounded-5 " value="{{ old('email') }}">
                            @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-12">
                            <label for="password" class="text-white">Password</label>
                            <input type="password" name="password" id="password" class="form-control rounded-5" value="{{ old('password') }}">
                            @error('password') <span class="text-danger small">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn bg-white rounded-5 logIn">Accedi</button>
                    <button type="button" class="btn btn-secondary rounded-5" data-bs-dismiss="modal">Close</button>
                </div>
            </form>


        </div>
    </div>
</div>