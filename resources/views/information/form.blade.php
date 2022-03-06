<div class="form-group {{ $errors->has('LastName') ? 'has-error' : ''}}">
    <label for="LastName" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="LastName" type="text" id="LastName" value="{{ isset($information->LastName) ? $information->LastName : ''}}" >
    {!! $errors->first('LastName', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Gender') ? 'has-error' : ''}}">
    <label for="Gender" class="control-label">{{ 'Gender' }}</label>
    <input class="form-control" name="Gender" type="text" id="Gender" value="{{ isset($information->Gender) ? $information->Gender : ''}}" >
    {!! $errors->first('Gender', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Age') ? 'has-error' : ''}}">
    <label for="Age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="Age" type="text" id="Age" value="{{ isset($information->Age) ? $information->Age : ''}}" >
    {!! $errors->first('Age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('City') ? 'has-error' : ''}}">
    <label for="City" class="control-label">{{ 'City' }}</label>
    <input class="form-control" name="City" type="text" id="City" value="{{ isset($information->City) ? $information->City : ''}}" >
    {!! $errors->first('City', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('State') ? 'has-error' : ''}}">
    <label for="State" class="control-label">{{ 'State' }}</label>
    <input class="form-control" name="State" type="text" id="State" value="{{ isset($information->State) ? $information->State : ''}}" >
    {!! $errors->first('State', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Country') ? 'has-error' : ''}}">
    <label for="Country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="Country" type="text" id="Country" value="{{ isset($information->Country) ? $information->Country : ''}}" >
    {!! $errors->first('Country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('MarvelCharacter') ? 'has-error' : ''}}">
    <label for="MarvelCharacter" class="control-label">{{ 'Marvel character' }}</label>
    <select class="form-select" aria-label="Default select example" name="MarvelCharacter" type="text" id="MarvelCharacter" value="{{ isset($information->MarvelCharacter) ? $information->MarvelCharacter : ''}}" >
        <option selected>Open this select menu</option>
        <option value="1"></option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    {!! $errors->first('MarvelCharacter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('MarvelComic') ? 'has-error' : ''}}">
    <label for="MarvelComic" class="control-label">{{ 'Marvel comic' }}</label>
    <select class="form-select" aria-label="Default select example" name="MarvelComic" type="text" id="MarvelComic" value="{{ isset($information->MarvelComic) ? $information->MarvelComic : ''}}" >
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    {!! $errors->first('MarvelComic', '<p class="help-block">:message</p>') !!}
</div>
    <select class="form-select" aria-label="Default select example" type="text" >
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
