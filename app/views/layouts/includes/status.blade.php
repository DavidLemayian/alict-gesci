@if (Session::has('message'))
<div class="alert alert-info">
<a class="close" data-dismiss="alert" href="#">×</a>
    <p>{{ Session::get('message') }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
  <a class="close" data-dismiss="alert" href="#">×</a>
  <ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
  </ul>
</div>
@endif
