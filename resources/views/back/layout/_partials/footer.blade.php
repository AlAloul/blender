<footer class="footer">
    <div class="grid">

        <div class="footer_version">
                <span class="footer_status {{ app()->environment() == 'production' ? ' -production' : '-non-production' }}">
                    {{  trans('back.environment.' . (app()->environment() == 'production' ? 'production' : 'test')) }}
                </span>
            <span title="Laravel v. {{ app()->version() }}">Blender v. {{ config('blender.version') }} - {{ trans('back.since') }} {{ config('blender.installDate') }}</span>
        </div>
    </div>
    <div class="footer_colofon">
        <a href="https://spatie.be">© {{ roman_year() }} spatie.be</a>
    </div>
</footer>
