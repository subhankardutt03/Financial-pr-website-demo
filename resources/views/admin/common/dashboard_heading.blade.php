<div class="page-title">
    <h3>Dashboard</h3>
    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
</div>
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible show fade">
    {{Session::get('success')}}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif