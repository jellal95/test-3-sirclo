@csrf

<div class="form-group row">
    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
    <div class="col-md-6">
        <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
               name="date" value="{{ old('date', $weight->date ?? '') }}" autofocus>
        @if ($errors->has('date'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('date') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group row">
    <label for="max" class="col-md-4 col-form-label text-md-right">{{ __('Max') }}</label>
    <div class="col-md-6">
        <input id="max" type="number" class="form-control{{ $errors->has('max') ? ' is-invalid' : '' }}"
               name="max" value="{{ old('max', $weight->max ?? '') }}">
        @if ($errors->has('max'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('max') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="min" class="col-md-4 col-form-label text-md-right">{{ __('Min') }}</label>
    <div class="col-md-6">
        <input id="min" type="number" class="form-control{{ $errors->has('min') ? ' is-invalid' : '' }}"
               name="min" value="{{ old('min', $weight->min ?? '') }}">
        @if ($errors->has('min'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('min') }}</strong>
            </span>
        @endif
    </div>
</div>


