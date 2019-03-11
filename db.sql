-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2018 at 03:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camposwe_vabcorretora`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `title_blog` varchar(255) NOT NULL,
  `data_blog` varchar(20) NOT NULL,
  `content_blog` longtext NOT NULL,
  `link_image` varchar(255) DEFAULT NULL,
  `deleted` enum('1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `title_blog`, `data_blog`, `content_blog`, `link_image`, `deleted`) VALUES
(1, 'Leitor para Pets', '11/12/2018', '<p>A DMZ sai na frente e lanÃ§a um leitor RFID universal para Pets, cuja leitura abrange todas frequÃªncias de Low e High frequency. O leitor tem aplicaÃ§Ãµes para leitura de PETs que foram injetados com microchips 134,2KHz ou 125KHz, tanto das tecnologias FDX-B e HDX.&nbsp; O leitor PET Universal da DMZ tambÃ©m permite a leitura de tags de gados, tambÃ©m conhecidas como brincos RFID</p><p>AlÃ©m das aplicaÃ§Ãµes na agropecuÃ¡ria para identificaÃ§Ã£o e contagem do gado, a possibilidade de identificar PETs como cachorros e gatos pela tecnologia RFID estÃ¡ se tornando cada vez mais comum.</p>', 'https://vabcorretora.camposwebsolutions.com.br/uploads/capablog1.png', NULL),
(2, 'Blog onde vivem?', '11/12/2018', '<p>Blog Ã© uma palavra que resulta da simplificaÃ§Ã£o do termo <strong>weblog</strong>. Este, por sua vez, Ã© resultante da justaposiÃ§Ã£o das palavras da lÃ­ngua inglesa <i>web </i>e <i>log</i>. <i>Web</i>aparece aqui com o significado de rede (da internet) enquanto que <i>log </i>Ã© utilizado para designar o registro de atividade ou desempenho regular de algo. Numa traduÃ§Ã£o livre podemos definir blog como um <strong>\"diÃ¡rio online\"</strong>.</p><p>Blogs sÃ£o pÃ¡ginas da internet onde regularmente sÃ£o publicados diversos conteÃºdos, como textos, imagens, mÃºsicas ou vÃ­deos, tanto podendo ser dedicados a um assunto especÃ­fico como ser de Ã¢mbito bastante geral. Podem ser mantidos por uma ou vÃ¡rias pessoas e tÃªm normalmente espaÃ§o para comentÃ¡rios dos seus leitores. Blogueiro Ã© o nome dado a quem publica num blog e blogosfera Ã© o conjunto de blogs.</p>', 'https://vabcorretora.camposwebsolutions.com.br/uploads/queesunblog1.png', NULL),
(3, 'Apple e o mundo', '11/12/2018', '<figure class=\"table\"><table><tbody><tr><td colspan=\"2\">&nbsp;</td></tr><tr><td colspan=\"2\">Vista aÃ©rea do <a href=\"https://pt.wikipedia.org/wiki/Apple_Park\">Apple Park</a> em <a href=\"https://pt.wikipedia.org/wiki/Cupertino\">Cupertino</a>, <a href=\"https://pt.wikipedia.org/wiki/Calif%C3%B3rnia\">CalifÃ³rnia</a></td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Raz%C3%A3o_social\">RazÃ£o social</a></td><td>Apple Inc.</td></tr><tr><td>&nbsp;</td><td><a href=\"https://pt.wikipedia.org/wiki/Bolsa_de_valores\">Empresa cotada em bolsa</a></td></tr><tr><td><i>Slogan</i></td><td><i>\"Think different\"</i> (em <a href=\"https://pt.wikipedia.org/wiki/L%C3%ADngua_inglesa\">InglÃªs</a>) (Pense Diferente) em portuguÃªs</td></tr><tr><td>CotaÃ§Ã£o</td><td><a href=\"https://pt.wikipedia.org/wiki/NASDAQ\">NASDAQ</a>: <a href=\"https://www.nasdaq.com/symbol/AAPL\">AAPL</a><br><a href=\"https://pt.wikipedia.org/wiki/New_York_Stock_Exchange\">NYSE</a>:&nbsp;<a href=\"http://www.nyse.com/about/listed/lcddata.html?ticker=AAPL\">AAPL</a><br><a href=\"https://pt.wikipedia.org/wiki/NASDAQ-100\">NASDAQ-100 Component</a><br><a href=\"https://pt.wikipedia.org/wiki/S%26P_500\">S&amp;P 500 Component</a></td></tr><tr><td>IndÃºstria</td><td><a href=\"https://pt.wikipedia.org/wiki/Hardware\">Hardware de Computador</a><br><a href=\"https://pt.wikipedia.org/wiki/Software\">Software de Computador</a><br><a href=\"https://pt.wikipedia.org/wiki/Electr%C3%B3nica_de_consumo\">EletrÃ´nicos de consumo</a></td></tr><tr><td>GÃªnero</td><td><a href=\"https://pt.wikipedia.org/wiki/Incorporation\">Incorporation</a></td></tr><tr><td>FundaÃ§Ã£o</td><td><a href=\"https://pt.wikipedia.org/wiki/1_de_abril\">1 de abril</a> de <a href=\"https://pt.wikipedia.org/wiki/1976\">1976</a> (42&nbsp;anos), como Apple Computer, Inc.<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-orgincpr-1\">[1]</a><br><a href=\"https://pt.wikipedia.org/wiki/Calif%C3%B3rnia\">CalifÃ³rnia</a>, <a href=\"https://pt.wikipedia.org/wiki/Estados_Unidos\">Estados Unidos</a></td></tr><tr><td>Fundador(es)</td><td><a href=\"https://pt.wikipedia.org/wiki/Steve_Jobs\">Steve Jobs</a><br><a href=\"https://pt.wikipedia.org/wiki/Steve_Wozniak\">Steve Wozniak</a><br><a href=\"https://pt.wikipedia.org/wiki/Ronald_Wayne\">Ronald Wayne</a><a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-AppleConf-2\">[2]</a></td></tr><tr><td>Locais</td><td>453 lojas de varejo em 16 paÃ­ses (marÃ§o de 2015)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-3\">[3]</a></td></tr><tr><td>Pessoas-chave</td><td><a href=\"https://pt.wikipedia.org/wiki/Tim_Cook\">Tim Cook</a> (<a href=\"https://pt.wikipedia.org/wiki/CEO\">CEO</a>)<br>Jonathan Ive (CDO)<br>Luca Maestri (<a href=\"https://pt.wikipedia.org/wiki/CFO\">CFO</a>)<br>Jeff Williams (<a href=\"https://pt.wikipedia.org/wiki/COO\">COO</a>)</td></tr><tr><td>Empregados</td><td>80&nbsp;300 (2014)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-4\">[4]</a></td></tr><tr><td>Produtos</td><td><p><strong>Lista de produtos</strong><a href=\"https://pt.wikipedia.org/wiki/Apple#\"><strong>[Expandir]</strong></a></p><p>&nbsp;</p></td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Subsidi%C3%A1ria\">SubsidiÃ¡rias</a></td><td>Braeburn Capital<br>FileMaker Inc.<br><a href=\"https://pt.wikipedia.org/wiki/Beats_Electronics\">Beats Electronics</a><br>Anobit</td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Valor_de_mercado\">Valor de mercado</a></td><td><a href=\"https://pt.wikipedia.org/wiki/US$\">US$</a> 1 trilhÃ£o (2018)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-Trilh%C3%A3o-5\">[5]</a></td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Receita_(economia)\">Receita</a></td><td>&nbsp;US$ 182,795 bilhÃµes (FY 2014)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-10-K-6\">[6]</a></td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Lucro\">Lucro</a></td><td>&nbsp;<a href=\"https://pt.wikipedia.org/wiki/US$\">US$</a> 45,687 bilhÃµes (2016)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-7\">[7]</a></td></tr><tr><td>Faturamento</td><td>&nbsp;US$ 47,79 bilhÃµes (FY 2010)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-10-K-6\">[6]</a></td></tr><tr><td><a href=\"https://pt.wikipedia.org/wiki/Patrim%C3%B4nio_l%C3%ADquido\">Renda lÃ­quida</a></td><td>&nbsp;US$ 14,01 bilhÃµes (FY 2010)<a href=\"https://pt.wikipedia.org/wiki/Apple#cite_note-10-K-6\">[6]</a></td></tr><tr><td><i>Website</i>oficial</td><td><a href=\"http://www.apple.com/\">Apple.com</a></td></tr></tbody></table></figure><p><strong>Apple Inc.</strong> (<a href=\"https://pt.wikipedia.org/wiki/NASDAQ\">NASDAQ</a>: <a href=\"https://www.nasdaq.com/symbol/AAPL\">AAPL</a>; <a href=\"https://pt.wikipedia.org/wiki/New_York_Stock_Exchange\">NYSE</a>:&nbsp;<a href=\"http://www.nyse.com/about/listed/lcddata.html?ticker=AAPL\">AAPL</a>; anteriormente <strong>Apple Computer, Inc.</strong>) Ã© uma <a href=\"https://pt.wikipedia.org/wiki/Empresa\">empresa</a> <a href=\"https://pt.wikipedia.org/wiki/Multinacional\">multinacional</a> <a href=\"https://pt.wikipedia.org/wiki/Norte-americana\">norte-americana</a> que tem o objetivo de projetar e comercializar produtos eletrÃ´nicos de consumo, <a href=\"https://pt.wikipedia.org/wiki/Software\">software</a> de <a href=\"https://pt.wikipedia.org/wiki/Computador\">computador</a> e <a href=\"https://pt.wikipedia.org/wiki/Computadores_pessoais\">computadores pessoais</a>. Os produtos de <a href=\"https://pt.wikipedia.org/wiki/Hardware\"><i>hardware</i></a> mais conhecidos da empresa incluem a linha de computadores <a href=\"https://pt.wikipedia.org/wiki/Macintosh\">Macintosh</a>, <a href=\"https://pt.wikipedia.org/wiki/IPod\">iPod</a>, <a href=\"https://pt.wikipedia.org/wiki/IPhone\">iPhone</a>, <a href=\"https://pt.wikipedia.org/wiki/IPad\">iPad</a>, <a href=\"https://pt.wikipedia.org/wiki/Apple_TV\">Apple TV</a> e o <a href=\"https://pt.wikipedia.org/wiki/Apple_Watch\">Apple Watch</a>. Os <a href=\"https://pt.wikipedia.org/wiki/Software\">softwares</a> incluem o sistema operacional <a href=\"https://pt.wikipedia.org/wiki/MacOS\">macOS</a>, o navegador de mÃ­dia <a href=\"https://pt.wikipedia.org/wiki/ITunes\">iTunes</a>, suÃ­te de software multimÃ­dia e criatividade <a href=\"https://pt.wikipedia.org/wiki/ILife\">iLife</a>, suÃ­te de software de produtividade <a href=\"https://pt.wikipedia.org/wiki/IWork\">iWork</a>, <a href=\"https://pt.wikipedia.org/wiki/Aperture\">Aperture</a>, um pacote de fotografia profissional, Final Cut Studio, uma suÃ­te de vÃ­deo profissional, produtos de software, LÃ³gica Studio, um conjunto de ferramentas de produÃ§Ã£o musical, <a href=\"https://pt.wikipedia.org/wiki/Navegador_(inform%C3%A1tica)\">navegador</a> <a href=\"https://pt.wikipedia.org/wiki/Safari\">Safari</a> e o <a href=\"https://pt.wikipedia.org/wiki/IOS_(Apple)\">iOS</a>, um sistema operacional mÃ³vel.</p>', 'https://vabcorretora.camposwebsolutions.com.br/uploads/teste.jpg', NULL),
(4, 'Google com internet', '11/12/2018', '<p>Google LLC Ã© uma empresa multinacional de serviÃ§os online e software dos Estados Unidos. O Google hospeda e desenvolve uma sÃ©rie de serviÃ§os e produtos baseados na internet e gera lucro principalmente atravÃ©s da publicidade pelo AdWords. A Google Ã© a principal subsidiÃ¡ria da Alphabet In</p>', 'https://vabcorretora.camposwebsolutions.com.br/uploads/google.jpg', NULL),
(5, 'EstratÃ©gias em um Novo Paradigma Globalizado', '11/12/2018', '<p>&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O cuidado em identificar pontos crÃ­ticos na adoÃ§Ã£o de polÃ­ticas descentralizadoras aponta para a melhoria dos modos de operaÃ§Ã£o convencionais. O incentivo ao avanÃ§o tecnolÃ³gico, assim como o desenvolvimento contÃ­nuo de distintas formas de atuaÃ§Ã£o prepara-nos para enfrentar situaÃ§Ãµes atÃ­picas decorrentes das diretrizes de desenvolvimento para o futuro. A prÃ¡tica cotidiana prova que a competitividade nas transaÃ§Ãµes comerciais auxilia a preparaÃ§Ã£o e a composiÃ§Ã£o do processo de comunicaÃ§Ã£o como um todo. Caros amigos, o acompanhamento das preferÃªncias de consumo maximiza as possibilidades por conta do sistema de formaÃ§Ã£o de quadros que corresponde Ã s necessidades. Ã‰ importante questionar o quanto a contÃ­nua expansÃ£o de nossa atividade deve passar por modificaÃ§Ãµes independentemente de todos os recursos funcionais envolvidos.&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O que temos que ter sempre em mente Ã© que o fenÃ´meno da Internet oferece uma interessante oportunidade para verificaÃ§Ã£o das formas de aÃ§Ã£o. Desta maneira, a complexidade dos estudos efetuados nos obriga Ã  anÃ¡lise do sistema de participaÃ§Ã£o geral. Por conseguinte, a necessidade de renovaÃ§Ã£o processual obstaculiza a apreciaÃ§Ã£o da importÃ¢ncia das diversas correntes de pensamento.&nbsp;</p><blockquote><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Podemos jÃ¡ vislumbrar o modo pelo qual a expansÃ£o dos mercados</strong> mundiais talvez venha a ressaltar a relatividade do orÃ§amento setorial. A certificaÃ§Ã£o de metodologias que nos auxiliam a lidar com o surgimento do <i>comÃ©rcio virtual promove a alavancagem das condiÃ§Ãµes</i> inegavelmente apropriadas. NÃ£o obstante, o desafiador cenÃ¡rio globalizado representa uma abertura para a melhoria dos nÃ­veis de motivaÃ§Ã£o departamental. O empenho em analisar a percepÃ§Ã£o das dificuldades nÃ£o pode mais se dissociar de alternativas Ã s soluÃ§Ãµes ortodoxas. Assim mesmo, o comprometimento entre as equipes possibilita uma melhor visÃ£o global dos relacionamentos verticais entre as hierarquias.&nbsp;</p></blockquote><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evidentemente, a consulta aos diversos militantes faz parte de um processo de gerenciamento das posturas dos Ã³rgÃ£os dirigentes com relaÃ§Ã£o Ã s suas atribuiÃ§Ãµes. Acima de tudo, Ã© fundamental ressaltar que o julgamento imparcial das eventualidades acarreta um processo de reformulaÃ§Ã£o e modernizaÃ§Ã£o dos paradigmas corporativos.</p>', 'https://vabcorretora.camposwebsolutions.com.br/uploads/175147addc34cedafa8d1d61de1e2eea.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
