<div id="preloader" class="se-pre-con">
    <div class="preloader-container">

        <div id="fountainG">
            <div id="fountainG_1" class="fountainG">
            </div>
            <div id="fountainG_2" class="fountainG">
            </div>
            <div id="fountainG_3" class="fountainG">
            </div>
        </div>

    </div>
</div>

@push('js_inline')
<!-- Pre LOADER -->
<script>
    window.onload = function () {
        document.body.removeChild(document.getElementById('preloader'));
        $('body').removeClass('preloader-overflow');
    }
</script>
<!-- JS end -->
@endpush