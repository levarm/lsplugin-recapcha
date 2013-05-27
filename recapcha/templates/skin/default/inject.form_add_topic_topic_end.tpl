
	
	<div class="wrapper-content wrapper-content-dark">
		{hookb run="topic_captcha"}
		<dl class="form-item">
			<dt><label for="topic-captcha">{$aLang.plugin.recapcha.topic}:</label></dt>
			<dd>
				<img src="{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}" 
					 onclick="this.src='{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}&n='+Math.random();" 
					 class="captcha-image" />
				<input type="text" name="captcha" id="topic-captcha" value="" maxlength="3" class="input-text input-width-100 js-ajax-validate" style="width: 165px" />
			</dd>
		</dl>
		{/hookb}
	</div><br/>