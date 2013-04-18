{include file='header.tpl'}{strip}
        <div class="container">
            <script type="text/javascript">
                function onSubmitButton(){
                    document.getElementById("submitButtonDiv").style.display = "none";	
                    document.getElementById("progressBar").style.display = "block";		
                }
            </script>

            <form class="form-horizontal" action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()">
                <label>{t}File visibility{/t}:</label>
                <select name="visibility">
                    <option value="public">{t}Public{/t}</option>
                    <option value="private">{t}Private{/t}</option>
                </select>

                <label>{t 1=$max_file_size}File (max size: %1){/t}:</label>
                <input type="file" name="file" />
                <label>{t}Password{/t}:</label>
                <input type="password" name="password" />
                <div id="submitButtonDiv">
                    <label></label>
                    <input class = "btn btn-primary" type="submit" name="submit" value="{t}Upload{/t}" id="submitButton"/>
                </div>

                <div id="progressBar" style="display:none">
                    {html_image file="{$smarty.const.DIR_TEMPLATE_IMGS}/progress_bar.gif"}
                </div>

            </form>
        </div>
{/strip}{include file='footer.tpl'}
