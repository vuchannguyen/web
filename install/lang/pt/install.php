<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/en/Development:Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirname'] = 'Directório de administração';
$string['availablelangs'] = 'Lista de línguas disponíveis';
$string['chooselanguagehead'] = 'Escolha uma língua';
$string['chooselanguagesub'] = 'Escolha por favor a língua a usar na instalação. Esta língua será usada por omissão no site, mas pode ser alterada posteriormente.';
$string['clialreadyinstalled'] = 'O ficheiro config.php já existe. Por favor, use o script admin/cli/upgrade.php se quiser actualizar o seu site.';
$string['cliinstallheader'] = 'Programa de instalação do Moodle {$a} por linha de comandos';
$string['databasehost'] = 'Servidor da base de dados';
$string['databasename'] = 'Nome da base de dados';
$string['databasetypehead'] = 'Escolha driver da base de dados';
$string['dataroot'] = 'Directório de dados';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dirroot'] = 'Directório do Moodle';
$string['environmenthead'] = 'A verificar o seu ambiente ...';
$string['environmentsub2'] = 'Cada versão do Moodle tem requisitos mínimos relativamente à versão do PHP e às extensões PHP obrigatórias. É feita uma análise total ao ambiente existente antes de cada instalação ou actualização. Por favor contacte o seu administrador de sistemas se não souber como instalar uma nova versão do PHP ou activar as suas extensões.';
$string['errorsinenvironment'] = 'Erros no ambiente!';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Não foi possível descarregar a língua "{$a}". O processo de instalação continuará em Inglês.';
$string['memorylimithelp'] = '<p>Actualmente o seu servidor impõe ao PHP um limite de memória de {$a}.</p>

<p>Isso poderá causar mais tarde problemas, especialmente se tiver um grande número de módulos activos e/ou um número elevado de utilizadores.</p>

<p>Recomendamos que configure o PHP com um limite maior, por exemplo, 40M.
Existem várias formas de fazer essa alteração:</p>
<ol>
<li>Recompilar o PHP com <i>--enable-memory-limit</i>.
Isso permitirá que o próprio Moodle modifique o limite de memória.</li>
<li>Se tiver acesso ao ficheiro php.ini, poderá modificar o valor de <b>memory_limit</b> para algo como 40M. Se não tiver acesso, poderá pedir ao adiminstrador do seu sistema que o faça.</li>
<li>Em alguns servidores PHP poderá criar um ficheiro .htaccess no directório do Moodle, com a linha:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>No entanto, em alguns servidores, isso faz com que nenhuma página PHP funcione (verá erros quando tentar ver as páginas) e terá que apagar o ficheiro .htaccess.</p></li>
</ol>';
$string['paths'] = 'Caminhos';
$string['pathserrcreatedataroot'] = 'O programa de instalação não conseguiu criar o directório de dados ({$a->dataroot})';
$string['pathshead'] = 'Confirmar caminhos';
$string['pathsrodataroot'] = 'A directoria dataroot não tem permissões de escrita.';
$string['pathsroparentdataroot'] = 'O directório pai ({$a->parent}) não tem permissões de escrita. O programa de instalação não conseguiu criar o directório de dados ({$a->dataroot})';
$string['pathssubadmindir'] = 'Alguns (poucos) alojamentos web usam /admin como um URL especial para permitir o acesso ao control panel ou a outras funcionalidades.
Infelizmente esta designação entra em conflito com a localização que o Moodle atribui às páginas de administração. 
A solução passa por renomear o directório admin da sua instalação do Moodle e colocando o nome escolhido aqui. Por exemplo:
<em>moodleadmin</em>. Isto corrige os links de administração no Moodle.';
$string['pathssubdataroot'] = 'É necessário um local onde o Moodle possa gravar os ficheiros submetidos. Este directório tem que ter permissões de leitura e ESCRITA pelo servidor web (normalmente \'nobody\' ou \'apache\'), mas não pode estar acessível através da web. O programa de instalação tentará criar este directório se ele ainda não existir.';
$string['pathssubdirroot'] = 'Caminho completo para a directoria de instalação do Moodle.';
$string['pathssubwwwroot'] = 'Endereço web completo para acesso ao Moodle.
Não é possível aceder ao Moodle usando vários endereços.
Se o seu site tem vários endereços públicos é necessário definir redireccionamentos permanentes em todos eles excepto neste.
Se o seu site pode ser acedido via intranet e Internet use este endereço público e configure o DNS para que a intranet permita a utilização deste endereço.
Se o endereço não estiver correcto mude o URL no seu browser para reiniciar a instalação com um valor diferente.';
$string['pathsunsecuredataroot'] = 'O directório dataroot não é seguro';
$string['pathswrongadmindir'] = 'A directoria admin não existe';
$string['phpextension'] = 'Extensão PHP {$a}';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionhelp'] = '<p>O Moodle precisa da versão 4.3.0 ou 5.1.0 do PHP (5.0.x produz vários problemas) ou superior.</p>
<p>Actualmente está a utilizar a versão {$a}</p>
<p>Deverá actualizar o PHP ou migrar para outro servidor com uma versão do PHP mais recente!</p>
(No caso da versão 5.0.x, poderá regredir para uma versão 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Está a ver esta página porque o pacote <strong>{$a->packname} {$a->packversion}</strong> foi instalado e posto a funcionar com sucesso no seu computador. Parabens!';
$string['welcomep30'] = 'Esta versão do <strong>{$a->installername}</strong> inclui aplicações para criar um ambiente onde o <strong>Moodle</strong> possa funcionar, nomeadamente:';
$string['welcomep40'] = 'Este pacote também inclui <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'A utilização de todas as aplicações neste pacote está regida pelas respectivas licenças. O pacote <strong>{$a->installername}</strong> completo é <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> distribuido nos termos da licença <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As páginas seguintes vão conduzí-lo por alguns passos simples de seguir para configurar o <strong>Moodle</strong> no seu computador. Poderá aceitar as definições seleccionadas por omissão, ou, opcionalmente, usar outras definições mais apropriadas às suas necessidades.';
$string['welcomep70'] = 'Clique no botão "Seguinte" em baixo, para continuar com a configuração do <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço Web';
