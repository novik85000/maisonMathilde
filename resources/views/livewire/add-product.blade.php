<div>
    <div>
            <div class="row">
                <div class="col col-4">
                    <label for="category_id" class="form-label">Выберете категорию</label>
                    <select name="category_id" class="form-control" wire:model="category_id">
                        @foreach($category_list as $categ)
                        <option value="{{$categ-> id }}">{{$categ-> name_fr }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name_fr" class="form-label">Название продукта fr</label>
                    <input type="text" class="form-control"  name="name_fr" wire:model="name_fr">
                </div>
                <div class="col">
                    <label for="name_en" class="form-label">Название продукта en</label>
                    <input type="text" class="form-control"  name="name_en" wire:model="name_en">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="description_fr" class="form-label">description_fr</label>
                    <textarea class="form-control" name="description_fr" rows="10" wire:model="description_fr"> </textarea>
                </div>
                <div class="col">
                    <label for="description_en" class="form-label">description_en</label>
                    <textarea class="form-control" name="description_en" rows="10" wire:model="description_en"> </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="materials_fr" class="form-label">materials_fr</label>
                    <textarea class="form-control" name="materials_fr" rows="10" wire:model="materials_fr"> </textarea>
                </div>
                <div class="col">
                    <label for="materials_en" class="form-label">materials_en</label>
                    <textarea class="form-control" name="materials_en" rows="10" wire:model="materials_en"> </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="instruction_fr" class="form-label">instruction_fr</label>
                    <textarea class="form-control" name="instruction_fr" rows="10" wire:model="instruction_fr"> </textarea>
                </div>
                <div class="col">
                    <label for="instruction_en" class="form-label">instruction_en</label>
                    <textarea class="form-control" name="instruction_en" rows="10" wire:model="instruction_en"> </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control"  name="price" wire:model="price">
                </div>
                <div class="col">
                    <label for="price_with_discount" class="form-label">Price with discount</label>
                    <input type="number" class="form-control"  name="price_with_discount" wire:model="price_with_discount">
                </div>
                <div class="col">
                    <label for="measure_id" class="form-label">Выберете меру измерения (штука или лот)</label>
                    <select name="measure_id" class="form-control" wire:model="measure_id">
                        @foreach($measure_list as $el)
                            <option value="{{$el->id}}"> {{$el-> name_fr}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="number" class="form-control"  name="weight" wire:model="weight">
                </div>
                <div class="col">
                    <label for="width" class="form-label">Width</label>
                    <input type="number" class="form-control"  name="width" wire:model="width">
                </div>
                <div class="col">
                    <label for="length" class="form-label">Length</label>
                    <input type="number" class="form-control"  name="length" wire:model="length">
                </div>
                <div class="col">
                    <label for="height" class="form-label">Height</label>
                    <input type="number" class="form-control"  name="height" wire:model="height">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="imageMain">Choose main image</label> <br>
                    <input type="file" name="imageMain" accept=".jpg,.jpeg,.png;,.bmp,.svg">
                </div>
                <div class="col">
                    <label for="image">Choose file</label> <br>
                    <input type="file" multiple name="image[]" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg, .mp4, .webm">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="w-100 btn btn-primary btn-lg" wire:click="save()">Submit</button>
                </div>
            </div>
        </div>
</div>
