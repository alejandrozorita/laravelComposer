
/**
 * User: AlejandroZorita
 * Date: 18/11/14
 * Time: 10:13
 */

<div class="form-group">
    {{Form::label($name,$label)}}
    {{  $control }}
    @if ( $error )

    <p class="error_message">{{ $error }}</p>
    @endif
</div>