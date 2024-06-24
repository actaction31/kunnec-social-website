<div class=" col pb-4">
    <div class="border p-card rounded">
        <div class="media">
            <div class="container">
                <form action="{{route('search')}}" method="GET">
                    @csrf
                    <div class="row">        
                        <div class="form-group col-lg-3">
                            <select class="custom-select text-capitalize" name="country" id="country"  required>
                                <option value="0" class="text-capitalize">Country</option>
                                
                                @if($countries)
                                    @foreach($countries as $country)
                                        @if($country->id == old('country'))
                                            <option value="{{ $country->id }}" class="text-capitalize" selected>{{ $country->name }}</option>
                                        @else
                                            <option value="{{ $country->id }}" class="text-capitalize">{{ $country->name }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                            <span class="invalid-feedback" id="country-empty" role="alert">
                                <strong>Please Choose Country</strong>
                            </span>
                        </div>
                        <div class="form-group col-lg-3 mb-2">
                            <select class="custom-select text-capitalize" name="state" id="state">
                                <option value="0">State</option>
                            </select>
                            <span class="invalid-feedback" id="state-empty" role="alert">
                                <strong>Please Choose State</strong>
                            </span>                                
                        </div>
                        <div class="form-group col-lg-3">
                            <select class="custom-select text-capitalize" name="city" id="city">
                                <option value="">City</option>
                            </select>
                            <span class="invalid-feedback" id="city-empty" role="alert">
                                <strong>Please Choose State</strong>
                            </span>                                  
                        </div>
                        <div class="form-group col-lg-3">
                            <button class="btn btn-warning" type="submit" style="width: 100%;font-weight: bold;padding: 5px 8px;">Filter</button>                                  
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>