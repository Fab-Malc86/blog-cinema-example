<x-layout-main>
  <x-nav />
  <div class="container text-white d-flex flex-column  align-items-center ">
    <h2 class="text-center ">Contact</h2>



    <form action="{{ route('contacts.send') }}" method="POST" class="w-75 mt-5">
      @csrf
      <div class="row gap-4 ">
        <div class="col-12">
          <label for="name" class="ps-3 mb-1">Nome</label>
          <input type="text" id="name" name="name" class="form-control rounded-5 ">
        </div>

        <div class="col-12">
          <label for="email" class="ps-3 mb-1">Email</label><br />
          <input type="text" id="email" name="email" class="form-control rounded-5">
        </div>

        <div class="col-12">
          <label for="message" class="ps-3 mb-1">Messaggio</label><br />
          <textarea name="message" id="message" cols="30" rows="10" class="rounded-4 w-100 p-3 "></textarea>
        </div>


        <div class="col-12 d-flex justify-content-between  align-items-center  ">
          <div class="col-6">
            <button class="btn btn-primary rounded-5">Invia Messaggio</button>
          </div>
          <div class="col-6 d-flex justify-content-end  ">
            <x-success />
          </div>
        </div>

      </div>

    </form>

  </div>


</x-layout-main>