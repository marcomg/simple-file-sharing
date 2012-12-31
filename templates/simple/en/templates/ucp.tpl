{include file='header.tpl'}
{if isset($username)}
<h1>Hallo {$username}!</h1>
<p>
    Hallo <b>{$username}</b>,<br/>
    welcome to the user control panel! Here you can read everything about you and you can change it. The only thing you can not change is your username.
</p>

<h2>Account of the state</h2>
<p>
    Password: <i>{$password}</i>
</p>
<p>
    Total space occupied by various files: <i>{$space_occuped}</i> out of a total of {$space_max}
</p>


<h2>>User changes</h2>
Change password:<form action="index.php?action=ucp&user_action=change_password" method="post" enctype="multipart/form-data">
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Change" />
</form>

<a href="./index.php?action=ucp&user_action=delete_user" onclick="return confirm('Are you sure you want to delete your account and all files associated with it? Warning! This operation is irreversible!')">Delete the account</a>
{/if}
{include file='footer.tpl'}
