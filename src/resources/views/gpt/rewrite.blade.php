@component('boilerplate::form', ['route' => 'boilerplate.gpt.process'])
<input type="hidden" name="tab" value="rewrite">
<div class="row mt-2">
    <div class="col-12">
        @component('boilerplate::input', ['name' => 'original-content', 'label' => 'boilerplate::gpt.form.rewrite.original', 'class' => 'original-content', 'type' => 'textarea', 'rows' => '5', 'disabled' => true])@endcomponent
            <input type="hidden" name="original-content" id="original-content" class="original-content">
    </div>
</div>
<div class="row">
    <div class="col-6">
        @component('boilerplate::input', ['name' => 'type', 'id' => 'rewrite-type', 'label' => 'boilerplate::gpt.form.rewrite.type.label', 'type' => 'select', 'options' => [
            'rewrite' => __('boilerplate::gpt.form.rewrite.type.rewrite'),
            'summary' => __('boilerplate::gpt.form.rewrite.type.summary'),
            'title' => __('boilerplate::gpt.form.rewrite.type.title'),
            'translate' => __('boilerplate::gpt.form.rewrite.type.translate'),
        ]])@endcomponent
    </div>
    <div class="col-6">
        @component('boilerplate::input', ['type' => 'select', 'name' => 'language', 'label' => 'boilerplate::gpt.form.language', 'options' => collect(config('boilerplate.locale.languages'))->map(function($e){return $e['label'];})->toArray(), 'value' => App::getLocale()])@endcomponent
    </div>
</div>
<div id="rewrite-options">
    <div class="row">
        <div class="col-6">
            @component('boilerplate::input', ['name' => 'actas', 'label' => 'boilerplate::gpt.form.actas'])@endcomponent
        </div>
        <div class="col-6">
            @component('boilerplate::input', ['name' => 'pov', 'label' => 'boilerplate::gpt.form.pov.label', 'type' => 'select', 'options' => [
                '' => '-',
                'first person singular' => __('boilerplate::gpt.form.pov.firstsingular'),
                'first person plurar' => __('boilerplate::gpt.form.pov.firstplural'),
                'second person' => __('boilerplate::gpt.form.pov.second'),
                'third person' => __('boilerplate::gpt.form.pov.third'),
            ]])@endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            @component('boilerplate::input', ['name' => 'tone', 'label' => 'boilerplate::gpt.form.tone.label', 'type' => 'select', 'options' => [
                '' => '-',
                'professionnal' => __('boilerplate::gpt.form.tone.professionnal'),
                'formal' => __('boilerplate::gpt.form.tone.formal'),
                'casual' => __('boilerplate::gpt.form.tone.casual'),
                'friendly' => __('boilerplate::gpt.form.tone.friendly'),
                'humorous' => __('boilerplate::gpt.form.tone.humorous'),
            ]])@endcomponent
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 pt-2 text-center">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-gears mr-1"></i> @lang('boilerplate::gpt.form.submit')</button>
    </div>
</div>
@endcomponent