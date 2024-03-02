<x-layout-main title="Registrati">
  <x-nav />

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 mx-auto">

        <div class="card bg-black border">
          <div class="card-header bg-white ">
            Registrati
          </div>

          <div class="card-body">
            <form action="/register" method="post">
              @csrf
              <div class="row g-3">

                <div class="col-12">
                  <label for="name" class="text-white">Nome</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                  @error('name') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>

                <div class="col-12">
                  <label for="email" class="text-white">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                  @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>

                <div class="col-12">
                  <label for="password" class="text-white">Password</label>
                  <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                  @error('password') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>

                <div class="col-12">
                  <label for="password_confirmation" class="text-white">Conferma Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                  @error('password') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Registrati</button>
                </div>

              </div>
            </form>
          </div>
        </div>



      </div>
    </div>
  </div>


</x-layout-main>