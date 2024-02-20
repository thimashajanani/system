<div class="form-group">
    <label for="guardian{{ $number }}_name">Guardian {{ $number }} Name</label>
    <input type="text" name="guardian{{ $number }}_name" id="guardian{{ $number }}_name"
           value="{{ $guardian ? $guardian->name : '' }}" class="form-control">
</div>
<div class="form-group">
    <label for="guardian{{ $number }}_relation">Guardian {{ $number }} Relation</label>
    <input type="text" name="guardian{{ $number }}_relation" id="guardian{{ $number }}_relation"
           value="{{ $guardian ? $guardian->relationship : '' }}" class="form-control">
</div>
<div class="form-group">
    <label for="guardian{{ $number }}_contact">Guardian {{ $number }} Contact</label>
    <input type="text" name="guardian{{ $number }}_contact" id="guardian{{ $number }}_contact"
           value="{{ $guardian ? $guardian->contact : '' }}" class="form-control">
</div>


