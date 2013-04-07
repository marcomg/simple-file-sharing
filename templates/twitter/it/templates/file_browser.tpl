{include file='header.tpl'}{strip}
        <div class="container">
{if !empty($idf)}
            <table border=1>
                <tr>
                    <td>Nome file</td>
                    <td class="hidden-phone">Dimensione file</td>
                    <td class="hidden-phone">Tipo file</td>
                    <td class="hidden-phone">Password file</td>
                    <td class="hidden-phone">Visibilità file</td>
                    <td>Operazioni sul file</td>
                    <td class="hidden-phone"></td>
                </tr>
{/if}
{* idf, file_name, file_size, file_type, file_new_name, file_name, file_password, file_visibility *}
{section name=id loop=$idf}
                <tr>
                    <td>{$file_name[id]}</td>
                    <td class="hidden-phone">{$file_size[id]}</td>
                    <td class="hidden-phone">{$file_type[id]}</td>
                    <td class="hidden-phone">{$file_password[id]}</td>
                    <td class="hidden-phone">{$file_visibility[id]}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn" href="index.php?action=file_manipulator&amp;action_file=overview&amp;file={$file_new_name[id]}"><i class="icon-wrench"></i> Modifica</a>
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?action=file_manipulator&amp;action_file=visibility_change&amp;file={$file_new_name[id]}"><i class="icon-pencil"></i> Cambia visibilità</a></li>
                                <li><a href="#" onclick="return alert('http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}')"><i class="icon-share"></i> Condividi</a></li>
                                <li><a href="index.php?action=file_manipulator&amp;action_file=delete&amp;file={$file_new_name[id]}" onclick="return confirm('Attenzione! Questa operazione sarà irreversibile. Il file {$file_name[id]} verrà eliminato dal sistema. Continuare? ')"><i class="icon-trash"></i> Cancella</a></li>
                                <li class="visible-phone divider"></li>
                                <li class="visible-phone"><a href="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}"><i class="icon-download-alt"></i> Scarica</a></li>
                            </ul>
                        </div>
                    </td>

                    <td class="hidden-phone">
                        <div class="btn-group">
                            <a class="btn" href="http://{$smarty.const.SCRIPT_URL}{$smarty.const.DIR_INSTALL}/index.php?action=download&amp;file={$file_new_name[id]}"><i class="icon-download-alt"></i> Scarica</a>
                        </div>
                    </td>
                </tr>


{sectionelse}
<p>Non c'è nessun file di tua proprietà nel nostro database. Per vederne uno devi caricarlo.</p>
{/section}

{if !empty($idf)}
            </table>
{/if}
        </div>
{/strip}{include file='footer.tpl'}
