<div class="card offset-3 col-6">
  <h5 class="card-header">{{$title}}</h5>
  <div class="card-body">
<form wire:submit="create">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input wire:model="name" type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror 
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input wire:model="email" type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <div>
        @error('email') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror 
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input wire:model="phone" type="text" class="form-control form-control-sm" id="exampleInputPassword1">
    <div>
        @error('phone') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror 
    </div>
  </div>
  <button  type="submit" class="btn btn-primary"     wire:loading.attr="disabled"
>Submit 
  <span wire:loading wire:target="save" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span wire:loading wire:target="save" class="sr-only">Loading...</span>
  </button>
</form>
</div>
</div>