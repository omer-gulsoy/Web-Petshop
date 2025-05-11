<h1>Profili Düzenle</h1>
<form method="POST" action="{{ route('customer.profile.update') }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}">
    <button type="submit">Kaydet</button>
</form>
