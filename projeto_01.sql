-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2020 às 01:57
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nome_emp` varchar(100) DEFAULT NULL,
  `cnpj_cpf` varchar(45) DEFAULT NULL,
  `razao_social` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status_emp` varchar(45) DEFAULT NULL,
  `data_cadastro_emp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.clientes`
--

CREATE TABLE `tb_admin.clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.clientes`
--

INSERT INTO `tb_admin.clientes` (`id`, `nome`, `email`, `tipo`, `cpf_cnpj`, `imagem`) VALUES
(1, 'Gustavo Oliveira', 'gustavo.silva669@etec.sp.gov.br', 'fisico', '404.310.328-07', '5f551e9a508c5.jpg'),
(2, 'Ricardo Pereira Gomes', 'ricardo.pereira121@ricardo.com.br', 'fisico', '134.124.658-40', '5f5521648cfef.jpg'),
(3, 'Maria Oliveira da Silva', 'maria@dasilva.com', 'fisico', '234.343.434-23', '5f55273e4f574.png'),
(4, 'Ricardo Varela Nunes', 'ricardo.varela@varella.com.br', 'fisico', '256.574.142-45', '5f5527bbdf80b.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(19, '::1', '2020-09-10 20:52:11', '5f5aba269a48c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(3, 'gustavo', 'gu$t4tvo.silva669', '5f541e6d831f1.jpg', 'Gustavo Alves da Silva', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(18, '::1', '2020-09-05'),
(19, '::1', '2020-09-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.categorias`
--

CREATE TABLE `tb_site.categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.categorias`
--

INSERT INTO `tb_site.categorias` (`id`, `nome`, `slug`, `order_id`) VALUES
(9, 'Saúde Pública', 'saude-publica', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config`
--

CREATE TABLE `tb_site.config` (
  `titulo` varchar(255) NOT NULL,
  `nome_autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `icone1` varchar(255) NOT NULL,
  `descricao1` text NOT NULL,
  `icone2` varchar(255) NOT NULL,
  `descricao2` text NOT NULL,
  `icone3` varchar(255) NOT NULL,
  `descricao3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`titulo`, `nome_autor`, `descricao`, `icone1`, `descricao1`, `icone2`, `descricao2`, `icone3`, `descricao3`) VALUES
('Gustavo Alves Dev | Desenvolvimento de Sites em Ferraz de Vasconcelos e Região', 'Gustavo Alves', 'Systems Analysis Student. Student Ambassador at IBM. Web and mobile developer.', 'fa fa-user', 'Descrição', 'fa fa-user', 'Descrição', 'fa fa-user', 'Descrição');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(15, 'Marcela Carvalho', 'Foi muito bom trabalhar com esta empresa. Aprovado!', '06/09/2020', 15),
(16, 'Ricardo Dias', 'Que bom ter um site, agora poderei vender pacas na internet!', '06/09/2020', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.funcoes`
--

CREATE TABLE `tb_site.funcoes` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `habilitada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_site.funcoes`
--

INSERT INTO `tb_site.funcoes` (`id`, `descricao`, `habilitada`) VALUES
(1, 'blog', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.noticias`
--

CREATE TABLE `tb_site.noticias` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `capa` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.noticias`
--

INSERT INTO `tb_site.noticias` (`id`, `categoria_id`, `data`, `titulo`, `conteudo`, `capa`, `slug`, `order_id`) VALUES
(10, 9, '2020-09-06', 'Saúde Confirma Mais 8 Casos de Covid-19 ', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis eu augue ut efficitur. In hac habitasse platea dictumst. Nullam pretium libero et mattis pretium. Morbi in ligula nec risus pulvinar posuere. Donec id volutpat nunc, non tincidunt purus. Suspendisse tincidunt hendrerit orci, mollis eleifend felis lobortis nec. In luctus lorem vel ante imperdiet facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at volutpat dolor. Sed at posuere tortor. Curabitur condimentum cursus libero maximus sagittis. Donec mollis tempus ex, ut blandit metus ullamcorper nec.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\"><img src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFRUXFxgaGBcYFxgYGhoYGhgYFxcXFxoZHSggHRolIBoYITEhJSotLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy8lICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKQBMwMBEQACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EAEwQAAECBAMEBgYGBwYDCQAAAAECEQADBCESMUEFUWFxBhMigZGhMlSSsdHwFBYjU8HSB0JSYoKi8TNDcrLC4RVEcxckJTQ2Y3XD0//EABoBAAIDAQEAAAAAAAAAAAAAAAIDAAEEBQb/xAA8EQABAwIDBQUGBAYCAwEAAAABAAIRAyEEEjEFE0FRYSJxgZHwFDKhscHRFUJS4QYWIzNy8VNiNIKSRP/aAAwDAQACEQMRAD8A3FJjurw6sBEVrRpEhacBLEHsngxcPuz8YxYgQQQuhg3S0jksiVsFpjBixBKb5ZsbZ7jyhMha8q3lzQlKhhIV6PIEBz5N7W6GUWy6eSRiHBjIHG33SaUjKNi5wWgulUvAuWoAAMU4sLKGtzf/AHjKTBIK6bBnaC30UOsIKyRcb2zOphtMENErJXcC8kIDeEMSVYIG+KlFZcgaf0gC3kmCqTrdEBt82u/wig26N1SRZQw0ggISy6TdElzClyLOzg/CAewPsU2nVcy7SonTCouTeLa0NEBDUqOeZcgsb74I6JbTBTFFMBVbUNbJyCwdvMQl8ELTTBBvaVl7UkXZCDjJsoqLgvozDxeLBRFt1n7ORNdSsR7RGIvmbkP5xdkMFehnJZASQxNwXOQvYcz+HCABumZTEJMJvYZ+b6jjeHMISXg2BMq86mUA5FjrBB4OihpubqEMSwWgpUCjqokpgC4pFoqUwU3GIGqoQkW3lsxne3Ox8IrOEw4epfs6CfBT1cXKSWwqYfl4tLKq55RaUVQARaBXRNsRp+MUWzdG18Agp+VtFeQIIYM4BLjicuUINMLW2uTA6JCfUlyp3Ubf05Q0M4LO6reeKTI18oYs8qpaLUUFB8oikqhQwiKwUxteeqXLMlKVJaygCHUbOotocwNwEc5zs5zFbw3L2VlStuLYdo+f5oFFulspVnbvjpriosuIoig77QKuEULIdiWLPfugcomYTN46ImykKyvFwhk6KwTf8YpXCvhAikSukjd5wJMap9KhUqyGNmFcI1yESUDqZaYcIK5nHy8RUGrkM+G29teBbdFFwlP9lqbveFvZ5qxzyiJZbCgg5CLshXFMVKuETqhiwYxjFynufPfAbzpZPNA6TdBIJhizQqFTW4W5i9r52OkA9aKUkI6ZwIZYuLON39H8YVlPBPJaol9WkOkEvn5s+dna3HxlyVDAFkCdNdr5ZDLWzBsrH5yYwXhKqXbnHr1662ojhUHcZ33O7Hzgnt7MBDTq/wBQOd66qKalVKC8cwLCrAAve1yNP9oASSIELQ4ta3UFUSjcYdKztCpPLBg4dKrhiQQLMk55wtzoXUweHa4ydQRIMxB5ngqGSnEUhOLGC+6w3HT4wufit7W1HAGY3Ztxt6t4KypRucHolR0DqItyfE1+MXmCjqNTLDj72UHoBM+USllzEpBYg9rTEov6SwW1zYcuUQPgWVnCb94Lwfd6ARo390wUG8PBXAqNgkIK02zeClZyqYRxi0sqikxYQqihxi1SqX3RFFVXKIooUjfEUlVCeI5RFJUFO+IrBWtOqUzkqWClE0JIZXomwYA6Ow5GMD6Lmm110WVG1Lm3NZP/AAeVrNT3LDd14rI/9JR52/qHmExLPZDgXFxHSOq4rheyap09oDT5tC3mASEdJgc8Ao9KtMwTAUFBQlwb5jTvtGZtRwcLyt9TDsym0ITWjUudCKE8IAmAtFCjvKjWcyAh7MrUzQoozFlA5iFMqh66eP2U7CgOBlqZStIUEkhzkN/KCLwDCzUcBWqUzVaLDzSu25SsBOoC/EgN5BXjCqt9F29hFsObxkHw/wB/Nd0cc06CrMOByf4vEok5UjbrGDECNY/0mTWJE1Mo+kq/Lc8EXwYSKOynVMMa884HcsUzFy59TOOSAw5mwH490Z5IJK9O2nTqUWM4H5WWr0enqmSAtWZUf6/h3Q2k6RK4u3KQFRrW3N/XzWitN7Q2V55zYKpFqkRaxiK8AxkMVPbJst8LycJsnmtN4uhqTZoYs5CrNSA4zt3xNVAS3RCKbW3NcPyPzvisvJHvZ94KgezccudvnjEa2NVKlUOEAcVHO0HAmUnM6MvBXZtXiK1VhERBRPXgSVXtuzvaAe6AuhgqO9rBvjfolJQDgJUSwxMWChxT2WuCXa12aEL0rZdOdovaRoQOd57pus7au2mNgwDgb753+coEuhbqOHAEBI0e2ibgurEGAz3v8/1oPlOdQC9DInpWkrJZYsSToQHIGqsrnd4kDGi52IokgCJHLnynoiSJXZJLhy/az955d0Op2XB2i8OeGtiAOGg+SiYiHArjuRaOlxqw5AByc2A9+njC6lTI2UdGlvHZUOdJSUlUtRUkFjZuD8niqdbMYKurQDRLTPNJRoWMrjueIoqqTEUQznFqKAiIrVWiKKCItXKqw098RFKbiLOiuLRSsJo1SyliX/HnvhYptBkBPNV7hDjZC68dpKSCtILJL3I98KdVF41Xcwux35muq3adYPS3JRsnaInIdsKkllJ05iBp1Mwgq9p7NGEcKlI2nyQ5dEJU4zE2TMsoblH0T3lhzIgcmR08FrONGOwrqUdsCY5xEx9vmjbWosSpSkllJIs9yM7b2iVBJlHsWv8A0zTItz4Jva6mQpW4pPgoGLfZq5+zO1ixFpzfIqNjMZKCcsI8rHzeLYeyIS9qgjGVJ6fIJPaQSiolzGcsO4Oe0ToAAYW+zl3dlzVwZYeo9eamcAuUUEMZ04tldIUWV7CHiuHeUDJo4i2lOnf11KV28FhUqRKDJYEgbn1inyCGhadmEVabsRU94n0B0TexZ0yYuYVE9WOyl8izX8j4wbCSVj2wyjTw4aAMxM/darQ5eWIXEXtEVEIRJ74tCi/R15gO+msDnbNymbl8SAhcGgkshDI4wSBV7iYii4NoIitWwndaKRBB2iXRdsx+02eoSQ44Qqpou1sgxWPd0+qHhSCUvcJ0CsTDQnu4wpdrDue65BA6xErxnSJO4EHUvn3aeJhdQLsYcpCRJxTE4U9UkpsVEkFScy/EsIUBdaC6G3uV67YpUhKiDkGNwAzs7nSNA0XNxADwQfv8E+xK0OCXu4mLUAQLZBmPGxgxchceqclB+UgR/wBQJ+vcjrTGkLy7kaiqjLUSzghlDf36QFSmHiEdGsabp4cUGZNGDAhJSHcuXfO2VheKp0spklStiA9uUCPFKiHrInZ4mplSjIS7k47Al8h3Z8LxzqzjvCD4Lq0WjdAt8e9KVqQFqCbD8Wv5vG2kSWAlc+uGh5A9eil33w1KTAoXSFFSUvkCWJG+FmqAYTxRcRKVUgjSDzBKylBIbVoIFSFW0WrTo3REqFZJEUrDUxL00gSja1J12zscwTJagJqWcPc66XGkY6jAXSDde12diqjcOBXYcsWOtu7X4I7pDzkpbSYkC4yJsNU52zGWYixA7Q8Vnrl9cnCVDrem7geQ8RbvTkyWlaClTFKgzgtYjMH50hroLehXHwra1HEjK05mnTu1WJXJmzEjMTZCsK95GaZg4KH4xkOY94XtMMyjSMNsH9ofUeHJa1dN6ynURo+LiUOFeYeGOMsXKoMbh9oFp/OLeKJ0cB6hAOmPyWoRdM9lc7bTQcY7ub8gs3bSFKVOQnMJlty7RP8AmHlA1JJK7ux2NZhqZ5l3z/ZX2ZLImISs9mRKJJ3KmOfJIPjAtsb8Ag2k4Gi4Ux2qjg3/AOdfiizKodWqcThMx8O8ShYEcS781jdBZrTzSaWFO9bh2ns04Lurzf4JzYtambKdKcIDhswwZvfB03SFzNsYU0aoJcTPP1oktv7XVKZMsOtXewyygatQiwWjZGzKdZprVdOAWlSBXVpx+mRf58IayYuuTtJtIYhwpafXiicxBLAI4pSppZipyigqwWyBa4yta0ZtNV2WlrmyE7UKGIkZe+1/ONDAcolcisQXkhCtoINJQyYtUu01eKUXc4tWumjECGzG8jlcXgHCQteFr7qqHz8j87IciV1bLJcB3QlLJuMkhP8AqfuzhJbC7tPG755bTF7XJ4cZP0H7JOpoQuaSgXF23HlqztzgV12Vez0WanY6gkBVkpJAyzcu3H50isoTzWGq15FOJYwKSC5Z2e+eYyysdbawQ5Ll4muajc1J0Rfy6cevyMqZchBUVguxLfulmUINjBMhcvGYys2mKTmxIueY4erouAk2z3Q4nKJK4gaXugaowo1EXUkE5B3vutYQs12ym+yPiTYpWplFKsJHfpDWODhIWSo0sOUoAg0uVOWvzuioVh0IajbhBKpVUS3inGAibcrROFYGPshIZ3Lkiw8mtleMhBBW8PDgOnFDKZSz2VF95bM55ReYhUGiZSdTIKSxF9LZi1+X+0NY/wAlTqQiwv64pQCNCzJq8RLhEAJBALEix3H598Kqgltl0NnOpMxDTVEt66dPXiltm7QmYjKnpwq/VLMDwjLTqumHL0u0tk0nUjVoC4vZXrtnKWoTUKwrDPxbIwVSkc0tQ7O2tSbSFKtaLT8kaeFP1ksOsACZL/bG7nmUnmIEz7w14jmiG7zbqr/acZpvH5TynhfgqU0oLQZQJ6qaCZRu6FC6pahmGNxuvugBpHDgtvabV3pb/UbZ4H5gdHD104LqeauXUdWsOgpwuznCBYhWcUCQVtq0KdWmHcQZ8U3s+tCZeFgC5CjvULPzIYwQQVaLTUzxfh3I9NXhCcKLC/nnF2VOpkmShVu0MfVpNwVpfVwntHutAlHTpZZPRBnU6VPJSbzlpK1bkAXA5gNEI5IYlzarhdoMd5V6nZwmTlS3dISkDDkiWMgbekVaaBMSJMLIaxweH3huZJPVxPwAH2VayoVIKZMlKWAcu2u8ksBx8N0WTlsEvDYduNb7RiLzoOAA5Dn6snaSkT6ZIWs3K9P4NwGTfjDGgari43F1mE0WyxosBxjmTxJTLeMMXHVWI79YiGCFBds4lpUJMQqxaFZe39sppUpWpKlBSsICWfInU8IF7w0XWrB4N2KeWtIECbrD+vcn7qZ/J+aF+0Dkuh+AVv1t+P2XDp1J+6m/yfmie0N5K/wCt+sfH7KD06k/dTf5PzRPaByVfgNb9bfj9lw6dyvupn8n5ontDeSsbCrfrb8fsqT+m0lV+qmhQFi6WHdiY/0gHVWm66OEwFaiMji0tOus+cer81Wl6ayQDikzHtkU/q3Bcqc39wgBUHELViMJWc4btwHf1ty5fFBk9M5ICgZc0gl27NmyPpZtFbwJ9bC1XOa5pFtdePhzRT00kqHblTdQGKR2S1j2s3Dg8BxghUbF1ldg6tJ39Et4TM68/EWKKenUr7qb/J+aGCu0cFy6mxq7ySXt+P2UyuncpOIiVNxNb0Lbz6Xy8BVrgiAmYbYlRj8znD4rGT0tTiKldbkQA4Oe8Yt934C0KzrY/ZdQiAR8Vq/XqWU9pExSrD9Rgnhd3MMpVQ0rBX2JVeLOb8fshK6aSfupjfw/mh/tLeSyfy9W/W34/ZVPTKV91M/l+MT2pvJT+Xq362/H7Lj0zl/dzP5fjF+0t5Kfy9W/W34/ZcjpnKB/spn8vxgH4hp4JjNgVm/nb8fsr1fTSWqUEJlLGeeHMnPO0K3wlPGxKsDtD4/ZZdN0pSFOUrsEgYMIdrEqc3JG6JvQm/g1SPeHx+y9TQ7XTUoxpSpISSk4sywSp7H95u6GU32kLBi8GaLwx15HA9/crF43DRcgi5hHSOGkRAAmJQ0cPucP4ZwsvbMSt9PA13MzhhhArNmFRxBakvmnNJP+HQxnfRkyCu/hduNYzLWaZHEa/RVFauS4WCpB/WDkp/FQ/mHHOAzupmHaI34HDbQaamGMO5aDxHDvFin/AKP1iUrlqZTdlYuGN2O9Jhj4d2gVjwL6lCqcLVZLTq0/MetEga/qprKl4esAKikn0siRpCJg6L1NLDgUg1pmNJ5ckSoqy5D3duD5eeXfFkomMCQnVmFZGE4SAQdXbw0bLSBzXTN3bqFMqd20yyCykg4wTYkPlk0TNdQsluYKlPVFSrAOEqI1dTavwiSrygBM0tepKAZvpOWYXIsz7tRFtcYugqUml0N0Wns2eZSVEMVq7Sici4fwAiwFnrMFU5Tpokpmx1z0BaV2KipalWcm3ZH7ADAd8DllXUxdLCN7QsLADgPX0W3S0wQhKAbJDebvGhoyiF4vH4g4msamnLuQ9oV6JKMSiSTZhmYpzsoTNn7Odi3kCwGpQaDaqVoxKaWNMRDniIpr5uVtxexXMcG0Zdz0t4piXMSoEpuxY8DnDA6dFyMVg6mHIFQa6K78IJY14/8ASOfsZVv73/QqEV/dC7Wwf7z/APH6heBjIvVtC1dl9GqupTjkU65iLjEMKUuM2KyH7oip9Wmww510lNoJqZvUmWsTXw9XhOJ9AE5mIqJbGYGy0q3ojXSkGZMppiUAOT2VMN5CSSBxIiSkirTJgFD2X0XrKmX1kiQqYhyMQVLFxmGUoHWLlW6qxpglA2xsOppW+kSVSsWRLEFs+0kkdzxFbKjXe6U5T9Dq9aBMTSzCkhweyCRvCVEK8oqQqNdgsXJPZmxKmoUtEmSpakB1pskpu1woi72bOLVue1ouUKl2VOmS5k1EsqRJDzFOkYAXzBIOhyERWXNBAJ1RdjbCqarF9Hkqm4GxMUhsTt6RD5HLdEsqdUazUwh0+w565c2ciUoy5LiYXT2CA5xAnF4DSBhGarQQOJU0exp86WudLlkypZaZMdICcjdyCbF2Dm4ghZA+o0GCtvbvRJQq/otJJnLUJQmHrFynUHCStIsEpBLMS/dEBSmVRkzOKQ2h0QrpKDMm0y0oTdSnQphvOBRIHGJIRiqxxgFZ9VsqdLlS565ZTKm/2a3SQps2ALjvAiKw4EwNVeq2JUSzKSuSoKnAGUAyisFmwhJJ1FjeLUD2mYOib2h0VrpEszZtMtMsXKuyoDiQlRIHEwKjazCYBWM4iJsr2HQtTSJnGaf8kuNuGbLb815fbtUsrtg/l+rltkxtXn5TEtMUUwBDqtliYy8RQpw7ajfwyjJVoSZC9Rs/bbaTBTqjS0/dcjapQsS5kssLYnJPAnQwoVXNsupiNk0cUDUaYceI9euafXVynZSu4g3/AMNmPdDDUaRBXJpbIxdJ+amQI4z87fsrS6dMoOgnCsOzlt7gcbQuANF3qBqvaN+BmFpHr9lm1NUQXcd4B8jAkrY1qBUfaDEln1BLA7xz9/jAm6Idk39evgsiprlkkKNnJbdyhZcU4MbqE9ImKVTKve7b2dLjl6VoIEwlkQ5C2MpJUCVAHQG3ffh74jVbxCoKlyXvcu598QFTKtKnnBYuGAPo3uwFzw4QYMpbgW6L02yqzIafOcGufWpBwIKBtetUleEFEtNmWTjUp8ghA8HOsTOVgo7Jo+8QXHloB3u+ywa+bOxnC6UftzGc8ybDWwYWgDmldujSptYBA7hp4JatlBZ6wpWsuAAhYIXvNvRHDRxaBIm6Y0kDLp3jRer2chpYdGAkOUu/DxYCNTNF4jbFUPxBAdIHw5+vBFEMXHIXkv0kD7CV/wBX/QqEV/dXb2EIrO/x+oXz5WUZF6phX0j9JdVPkooEUq1y5PVDB1RIxLGHCOzmWLgauYoBZMI1ri8vEnqtPooKpW1VKr0ITPFKerYJAKcaRi7JN7qF75xEqtkFKKZtKyP0b7SrZm0lpnLmqcTOvQoqKUkZWNknEwDNYxZ0V4hrBTt4LV2einGzahMydMp5ArpoTMlFilPWgIYgFksz8IrilnNvBAkxx7lbpPhlzNmUKhMmSRPQv6RNUF9YxICXGfph3azM8RSncPfx5BY/TLadanbCUS1zR25QkoSVYVJITi7IsoE4nJ3HdFjRMpNYaXzXsETEStqV0xABKaOWtYGqwVm/EpSjygUggmk0dT9Fn11DJFDtCqpyDJq5KZqQNFMrGG0uQeZUNItGHHeNa7UGFPQfZ02moKdUvqwudOTNm41YfsTZk2LqwhJa11GIVVdzXVCDwEDvQqKmTT7XqaVQ+wr5RWkaYmUVDzneKYnBQnNSDhq319li9Jqf/h+zKehf7WfOK5h3pQsH/wDIdxixcyjYd5UL+Q9fVerH/qBX/wAd/wDemK/Klf8A5/8A2+iyJE2VTbNqKmlnVNcianAetWD1VikqUkgEAYgTYlm0vETiC+qGuAb3cV53pan/AMF2adAVAniQpn8DFjVG3++9eg2xMnS6vZCpUkzpiKZTygQk4ShCVMVEAEOc4g0KSwAseCYv90WTNRVfTU0dTUSp5SozqepT1iB6QKRixBDuR2VbrEARSogsy5gI4EL48DBrfJXsehR+xX/1T/kRG/C+4e9eS/iD/wAhv+I+blvPGlcRdVz1y0golYxrc24WjJWqvabBes2Ts/CYinNQy7lOnL/aNS1uIOqXMRwwqI7iATFMrSO0FeN2KKbv6Dx3EgHwnVFTtGWbFaQdxIBHcqC3lI8UhuB2nSbDWujofsUyaZC20JbtJLd+498C9rSJC0YHEYynUFNwJHEOBtz6hZ9SlUoKPpt/CW5C3g0INgvUMh9tEkieojsqCFuMyBbcCfk90DKaWgG4kLq6hM5Ly1oxMMYBYFQe7iwtvZ2zzgSJ0QsfkMEGOC83VgoUUlrZsYUbLQ0yJCX+kneYGUULQ2HT9YpRIKglJUzkYi4DEjmTBsul1DEBN1yUp6tSU4CoKdLkgMQAoYrsXPgYIoGzJBur004/PzyggVbgtSTWLJMtINxYpAfk5t3mDk6JW7bGYpiRsiYxUSmUklioqKll+Ib3tEDSk1sSGjstLjyED5qK+gkdlOOarjLQVgnX0Qz8zEcG6JFHE4q5exrR1dC0KJKpcspkyF85hQlzvICie6DbIFguTiqlLEVga9ZobybJ+MQlaRVcZnbCUofcGbhrEbvJTsQ3ZTKNoNuGv3XopICVAkkcWdtxhr5cIC8pTLWvBOi8f+kw/wDdpAKsShMur+BTDujO9pAuu5st7XV3Zf0/UL51Cl3pXo9i9OKymliVLWlSE+iJiceHgk2IHDSKhJqUWPMkLNnbfqVVH0ozlde9lhgwyCQGbC1mZvGLRZG5csWWxW/pDr5ksyzMSjEGUpCAlZGXpacw0VAShh6YMrHTtyaKQ0fZ6krx5drE4Ob5W3RcJmQZs/FFqeks+ZSopFlKpcsgoJT9oljbCt9AW5WiAKhTaHZuK1Kf9I20EoCOsQpgwWqWCsd+R5kGKgIPZ6ZKzdndJamUqetKgtc9JTMUsYiQc2uGMUnGkxwA5INB0jqZVLMo0lJkTMTpIcjEL4S9sn5kwXVW6m1zw/io6Q7cm1ikGdg+zRgSlKcKQOAc8PARAhpsbTs1NVHSupmLplqKcdK3VqCWVbDZZftPhD8zvioQNotuOaW270inVk0TJ+EqSAlOEYQACTk+8xNExlNrBAT/ANeKv6Uav7Pruq6n0DhwYgv0cWbjN4uErcty5OGqS2B0ln0gmJlFBRMDLRMTiSdHZxdiRyiQjqMFSC7gmdhdNKukl9VKWky3JCFoxhJJc4bgi/GJAQ1KTXmTqlavpPVTKlNUqaeuR6KgAAkX7ISzYblwc3LxIUFNobliy0to/pCr50tUtS0JCwyihASpQZiCpy3c2cSAgbh2AyvKRacvY9CT9iv/AKp/yS43YX3T3ryX8Qf+Q3/EfNy3jL4iNS4kolVVTJaR1aMe++XcIyVnuabBev2NgsNXZne7tctI8ufP7KaeqWoOqUpJ4EMfaI98VTquIu1Nx+zMMx0iqG9Df5X+aibUP6UmYrhhSvyxGLc/mwpeHwbm/wBrFtHiR68lelElLKTIWhT2ODAN12tCTl4NhdbCjFZy2rWa9scDJU7ROcUV0aawamFFaWrPSpYLoCrZ4QTbi0LlMOXis6clRTi03/PzeAMopvCUURAq1qbJ2qqV6OviINr4S3sDtVBnqWcSiSTqST74gKgaAICdpidDy8YYFRjivRUy1KyX2gBiYJvxvDQszg1vBasyiK5CgVzC17Nv3ADfBEWWcVQ14gBZuzpM6QT1cpZxarYa7n/GAEt0CrFDD4puWo4QOSY6isUSWIJ/fA7gyreUFD+Sye2bPpgUw4R3H7IEj6bjYgtxdvO0QZpTqzsE6nmcWkeH+/qvSKeNIXgqhGY5dJslZlBKnLSibLTMSApQCg4ewfwJ8YTiPdC37JcRUdHL6on1Yo/VpXsxjld7eP5rvqvR+rSvZiSVN4/mo+q9H6tK9mJKm8fzUJ6NURyp5J/hES6reu5qT0Zoh/y0ofwiJdXvXjiuHRii9WleyIklTeP5qfqtR+rSvZiSq3j+a76r0fq0r2YkqxVfzU/Vij9WlezElXvX8yoPRaj9VlezElDvH81A6L0fq0r2Ykqbx/Nd9V6P1aV7IiSr3r+aj6sUXq0r2RFyVW8dzUHoxRDOmkj+ERJKm9dzU/Vai9VleyIklTeP5rvqtRerSvZESSpvH8131WovVpXsiJJU3j+a76rUXqsr2REkqbx/NZdTs1EqYpEmWlCeySEhg5ABPujoYQ9gzzXnNsZn4hvHsj5lR9DbMh4fnngufuI1KFTrv8+EW7Sy24drS9ucwJueSCifUlf9igJ3n4vGIPqzC9bUwWzBSku8Zv8AunsM4+iJYffiPuaHE1Oi4rG7NBgh7vL/AGupakpKhMmSyGPZShQvuBJYwguJ1K9BQwVKm4PpUyD1dMeCDXXuP6RRXQYIKyhQLmGwZO825tqe54XBKeajW6q9GVIlpW6kJQo4nCmUXcEFIvZh3RBZC+HOI1J7khtzaM2oQVCW0oEhJA7uTsMhC3EuCKlSZTMTdeXKfCErSiIl8YgUlejoSmVKHWy8SVlxYHLc5Ddxh4sLrO7tO7JuFopSl04USzIIuphiD/vHtYhueCQajU5vXgq0aUjtK1trZ+UEI4qOJNgt5NIhCMaUzFHdLWvyYwcQsVSoSCHEAc3AR4ysja3VqWCpc6Uf/cStvagHETyTsJmFKAGu/wAYjyW/syulCWEicJjBsT3+MNaWxqvM7QweJrYguFLLPd56pqVPQv0VpVwBv4QwOB0XNxGz8RRbme23RSYMLmOU0o+1T/hV70wjE+6F0dlf3Hd31WlGNd1dEVLzFelVXVqpipSZElKTMCSxWpQBCSdzHyPBtjIo0hUjtHTosFSa9c0p7LYnqT69cNGm6P00lYmy5eBSAbhSrhiC4JvaFOxFV4yuMynswtKm4PaIhY+xNmprQaqpdYUpQly3IShILZA5/CNFaoaB3dO3MrLQpDEDe1bzoOACuaX6HVSkSyeoqCUKlkkhKtCl97jz4NWbf0yXe828q8ns9Zob7rrRyKP0QUZap9Ko3lLJS/3arj4/xQGK7QbVHEfFHg5YXUT+U27ik5J6411T+qJa5UvklDqI8vEwx3YFOn1BPmltO8NWrwggeAS+0E4qChSXZU2UDdrELBvB0zFeoRyKXUvhqQPEt+q0to9GkykKmUy5kqYgFQZaiFNfCQonOE08SXODagBB6J9TCBjS6kSCOuvmtfYVcZ9PLmnNSbtvBKT5gwitT3dQtHBaaFXeUw/mjbQkrXLUmXM6tZZlsFNcPY8HHfAsLWulwnojqNc5pDTB5rB6KU/V1FYgqUshUrtKLqPZUXJ7404l2amwxGqx4RuWpUbM6XOuiU2dQSquZVKqTiWiYpABUU9XLFgoB7a3ytxhlSo+i1gp6ET3lLpU2V3PNXUEjuHr5LS6FVRXTkFRX1cxSAo6pDFJ8DCcWwNqSBEiU/AvLqUEzBInpwW/GVbF0RRdEUWLWywqcQSwcX/hGvz5xsw5hhK420mh1VoPL6lFn10hCinq8TMHNybZw0NcRMrOSzgF584gg9WAV6YtBwezwyuXx2Vv2RTwz6pFfwHA+uSVkbSUDhmVDnUJQFNyJ7tIxNqEGCV6qrgaL29mkPG3yVq5zclakb1Kwg9wKW8DFvvzhHhKbWNgNaHccvonTnCrLWhDP1aCQGwJ6wsdSVnM8oEWWkhzuZ77fJNTFrRMfrOwGsM7gFiBqYLQoQGubEXRVVausJUlPUm5cBiDp+DRXeh3YywPeSgrpkwHspUcQ7LAgJbNjnu4NpFTKPdtadVn9ItpktJl4Uy0pAISP1tRazDcNX7lvdwCOhSjtO1Pr10XnDJhULRKlEtogCtem2TWqXLVLUEqIAKQUi7HcbEgZas+cOaZsVmqMAcHLp8oEoOAIUR2kgWBBLW0cNb4xagkTeQtCgkAs4f5/rDAEp7iNFq1Oy0hIWiWrHqZa+rLNxsTFkcQFz62Naz+nUeBP6gSPglZu1FhOELUF6JnoCSeAWOwe+Jnj90qns+g9+csEc2OMeI1Hgq7MWucSiokJZiy8IDd8U2/vBFjaW4ZvcM4yOEkg9IRZXRaWiYJiVrDF2ce+CFITIXPqfxE4sLXU7rXmKEaAF5JzlalbrANcKr+zGfEzlC6myCM7hxj6rRjGu4oi1F5etnGjrFz1gmRPSkKUA+BaQAHbS383CNrG76iGD3h8QudUd7PXNR3uuiTyIWpT7eppyxKRMxqWDYBWTElyQwhLsPUYMxEQtDcTSe7I0ySsbYO000YNLUkyyhSsCyCUrSS9iB8vvjRXpGsd5TvOo5LLh6zcONzVtGh4EIoqfptVJVKBMiQSozCCApeiUvyHnwccu4pODvedw6Ig/2is0s91t569EHpgtVPNTUy/wBeWuUrmxKDz/IILCAVGGm7gZ+/rqhxpNF4qt4gt+3rotKXQdRs9UvUSF4v8RSSrzPlCTU3lcO6hPbS3WGLeh+Sw9ozAmgoVEsEzZRJ4ALJjTTBNeoByP0WSqQ3DUSeBb8itLaHSVM5CpdIlc6YsFIIQoJS4YqUVAZPCWYYsOaqQAOqfUxgqNLaIJJ6WHmn6TYYTTypJXMT1YuZa1IdRup2zDu0KfXJqF0C/MSnMw4FJrJNuRhaFFSCWnCFLVd3WsrPiq7Qp7y4zbwsnsYGiL+JlY2wf/N13+OV/lMaK/8Aap+PzWWh/fq94+ST25O2cZi1Tk4pyCxSMYUpTBh2WBewcw2i3EhoDND3JWIdhC4l4lw4Xv8AdaXRGhVKp+2nCpalLKf2XYAcLAWhGKqB9S2gsn4OmadPtCCbrajOta6IqXRFFj1c3DNUdQ2eTYRrGzDiWHvXG2i/LWb3fUqytnS19sqT2r3U3cxhoeRaEgNabyPNYcsAsY0OEhJpVHMcHNMEKTTyUHFhSk3IzJtuDxke1jO9eqwWKxuKFyA3iQL+GvnwSiZ6ahWDAVcThtr+yYTOcrstY3C05Bga8fvdESUlWFCBNUP1vRlpbQru7cN2kToL/LzQis7Lmf2QdBq49zR9+8J8LSEpScMya5P2YGpdyXsOJN2grDqhpPqPklpaOp18ln/8PW6gWO5tOEDlK171pEhWmyRLT1YAK1MC4BZ9/wAO+JEIWuznNwC85Pp1JUUrS3dCiCDda5DhIQzT8IqFUrkyLtEhFKakyIIBA4rQpqdrwYCW502WzssOhRDBQeyrMN54fCDBss1UQb6J5G1sOFFQkylEdlR9BY0ZWh4GI14BgrgY7Z7sQ41cOc0WI0I8E8SOHfD9V5zM5juII8CsvaWw0TR2fsyNU5d4HvhbqYOi7GC21Uo9mrLh5n90fZ1MqUjCpZWdDuG6DY0gXWLauOpYl4dTbHM80cmGriEoE/aMqQpK5ywhJCkuXNyxAs+gPhGfEjshdbYwLqro5fVT9b6H1hPgv8sY4Xot0/ku+t9F6wnwX+WKhTdP5Lj0uofWE+yv8sSFN0/kqo6WUAynoHJKh/pi7lVuXDguV0toTYz0EcUqP+mIJChpOPBSOl1CzCoT7K/yxV1YpP5Lk9MKL1hPgv8ALEhXun8l31wofWE+C/yxcId27kp+uFF6wnwX+WJlV7t/JcemND6ynwX+WKhTdvPBR9cKH1hPgv8ALEhTdP5LvrhQ+sJ8F/liQpun8lI6X0Rt9IT4L/LEhTdP5KD0qoXfr0PvwqfxwxLqbl3JWPS2i9YT4L/LEV7p/JV+uFD6wnwX+WJCrdP5LvrhQ+sJ8F/liQpun8lH1wofWUeC/wAsSFN0/ks6o2nLnLUuSsLRZLgHPCHFxxjo4Qdgzz+y8ztnMzEN/wAfqVQsbm51Ma9NFys4NyFqUFakJSCpPViWcSMPaKuBZ8zm+QjC+nUzyF3adSkKUFYlfNYBYl41vhGeRuX4XyiYiAZAXd2C576bmFwDQfHmqyHTLK6hkp+7SAAde01zyMLAtL/JdKrUNWpusObjV2sd3CT8ExS1AnIISnAgMMge4BgINv8AUECwWSsxmz3b97i9xtcpqRNRJSVEsBmTmdw4k7uMGWtY2SsBxWIx1dopCI4cB1KTmIXUBJCgnCe2Hy1yGZaEe8vTgtpmI10R50ohRJGZCUl3JsM+e/nFoAQRAS20JWJgw4lr3y+PfFEIqZhZ0yiJsCx0ffpnAlqc144qBSYQxLkM+ud7dxEVlhFnnRHopWMOBZyIJt0DzlsVs0dFdzlqT+Jg4AWd9QJyv2WJg7NlgeloRqlQ1TFlkhcH8bDKsRLOPPvC6nAWjqZqR2QAUK7TgZKBOafdBAAjKVkxjqrK3tWHdLXcW8OhH3Ql0y5KSZTrQP7tRdh+4o3tuL8GioLNFGYijj3iniWw7g4WnoQo2VtyVPJSAULH6p13tEZVDrIdobFOHYajDIC0VKhwC844qhg0krF6UbGNVLQhKwgpXicgl+yQ1ucLqMziFv2djm4So5zmzIj4hedT0AWf79HsK+MZzQI4rtN2/Td+Q+YV5X6O5qiwnIfdgV8Yo0Y4ombdY8wKZnvCY/7MZ13qJQbgr4wO7TPxlnFnx/ZLL/R3NB/tkbnCSQ+53ghRnilO280GN2fMIJ6CTL/bItkcKmPHPlFigTxVP29TaCch8wq/UaZ98n2T8YP2Y80n+Zaf/GfMKPqPM++T7J+MT2U81P5lp/8AGfMLj0GX98n2T8Yv2U81X8yUv+M+YVfqQv75Psn4xPZTzVfzLS/4z5hQroUsB+uTu9BRH8RBLDi0A7DkcU2n/EFN18h8wpR0HmH+9QLagu/7Od+YgNz1Tvx6n+g+YTNL0AWrOoQm1gUKvyvcRRpFQbdpj8h810zoMof8wjngVl4xW6Kn49T/AEHzCAehqz6M5CnZmSbubZmL3J5oRt+nPuHzCuehKyzT0EEs+Ehg5BJcjdE3J5qfj7B+Q+aYV+j1TFSqmWkA5lJ+MTdFX+P05jIfMJaZ0CmJICpyQ75oItvIe3LOLFElU7b9JurD5hBmdCFgf2ySWHZTLUVeAPv3wRoxxVDbzSJNM+Y+y2NibIVTSyhSsRKsWTM6Uhjx7PnGugwtauDtTGtxVYPaIgR8Sfqn/GNC56AlW6JC3A80WSptTAkJgqEaI6khQAUARxhb6YdqtuDx9XDEmnx5o6QEi7JSkPazDMmA7LAmGpWxtZocZJt3LIqCucsN2QHbJkD9tX75uw0bhGNxNR3qy9dQp0dn0Y1J83HkOimWvtMl0gIPVAn9q3WK/eXdn0eKGsBamNgZnXcT2vDgOjdO++qLS1S5QQgMsrLmzjNrQQMWRvY18k2hbCEoWeyRclgWuHIcbxbOCkLKSWiTw+CCqmGMoY4gHZstQYlkYccuabK1NQBSUcUjVjYNz0iQqfWySToECjIC1ywcTAlBzchnHeGPcYoclK9UMYKjuYB6SdU1SKFRTlKmBchXA6W3EEdx3xbYcFx8fi6uDxbXfkgePPxC7ZFWogy1F1Is+9ItfiMj3HWDpngVj21hMrhXpjsu16Hn4/NE2rRmYhk2ULpPvD8fwgntkWWbZGNbhqpD/dd8+apsWbOCCicC6TYnUfLQNOeK0bcFCW1aREnl8/3RFUUrGJnVgLzcWvvgxTEyuY/bGJNI0yZBEdUyTxhgXIcVA84tAoYmIh1REFj36F9GIPwhZuntGWycmL6pHMA8d8LHaKc4mm2BxWV/xMqISD2iW3W3++GZYWYuJgDVaFJVY3BLgZtAkQiY8zB0S9SSXS9tHcZc7vBNHFVUdwN0qdWh6x8VRotUp7oqVIVcD6xcqoQpZBKjjCk5FIU45KSXD8Q0Z4kreXBjQIVkIL4cPIDXdbI95iiLXCgMmAZ9euC0dqISAjCMIDEpIBvhI1yVfMcYUE90Fefq6rOCQFJIrO0HycPe/dxi0HFaZqeumKwAqB/VLZajc2cVoFRlxstikmMcJY2F8QN/2cPDfwiSqc2ON0faqUqSCCMQzvfDmcr+EWDCMCRMXWHNZQAAVhzYhSRmRe9zZ2MMaGuMJby9oQ5oJLmNAgBZplR3iLUSKOEWt0o2K9opEEWXbM5OT3BzAPMAlasLS31VtMcSs36XMmlRZkCyE/tLNkvvb0u6Oa57n6r31DC0MM0NpiOZ4+aZpl5oAAkoJxK/bI9LmHYNuYZZE08OHzUfRaXbwntnT/rPLkeuqb2WlK3mpcnF6R3kZ8ABYbg++GUgDcrm7Wqvo0mUWWm1un3OqRn1MxTgZziMB/ZSo4EhO5wCswlxJ8V1aNNlJgBPui/Ui5J8bLS2debMIFkBMpPAIDqbvV/LD6QlxPKy85tSqWYamwm7yXu8dPIKPpSkrqVAOUJlgeBV/qgSe07wW3CUGOoYZruOZ32SwqVLFNNIYhakE8LLD+yR3wsnQrpPpNmrTB95sx5j6jyT9dTiWvrQ7AuoPrw5uod4hrm5brmYHGHG0nYeprGvP9xZUkqSmcmYgvLnjCeCxdJPEvh/iECCA6RoVWJoVauENGpd9O4PMdPXBW2js5SCubJJxkOw3g352e0W5kXCHA7Sp12tw9cdOh/dObOrjNlJUoMbpUBvEMpmQuJtfCsw1aGaFOyUYiQGAAcklgBzgnOy3K5jGF5hq6bKYsq+4guDyi2uzCQlVWFhhyCSN0GkEqVKBiAKiVUjhEQkcFdJ3589M2y5wsrQDZNbUBISUsSz8MmyhbORTquoIXl6umutSiAvsshItfN2ytpDgVmcxaeyUsxSS+oI8d78OUU4qg0BNVi3US78bNZvHKKbYKVBJlKlocFmf7yq1oJCnfpNgMTJCWKNCWPa8WLxl3RzyugMS3d5ekRzPPzukI1LncYVQCoFeFaRkXwgHK+d/GM4ibrcc5Fr9VejAC0lQZLh/QHeTnFOyxaUVMvzDNEJipnDCCT1oLkKPZcHL0YWmQvNbRWColsKXyGg3DfBBUh7UTIGEyVF3LjtFLfql1AF94iBC4ckClWRe443vvvFlCFuUIdgRa3kXHmIEqaLcTM+yV9mpNiH7OhYE3djEbqiM5TdZE0sA6szbCkkP+8RlDg/LwSTTLr5pQl4bjtYmd2LeLQTahJiFRpANkFBC4clJSWItbFoyKJ87uHDfjCnVIT201eVSFnYg8fnnFOeNCjp52kObYhVQwN2ChZ2y5NlA7tuoC2/iOJc3I59vXFKSNnzpq5rpIRZKQMx2hkN2/x544MmV62rjKVBgMyfmmNqqRIMulllyoAKbQksrLVvCIHQMvNZ6FI4p/tVTRvuj6n1wV5oR1ruGlJvzLt4AK9qHWzTyC54biRhN0Zmo7yGp8+PQJvY9MMKUlwSCpRz7RdSvMwTewxczaVX2jFu5Cw7gq0sgFM+YkgupgDmWlpSLc3txhYJl3VdOYqYVhtlb85/YLLp1KXTLxWwLSU2AYP2rDhbvgBJbddqqWtxTCNSHA90T84807UVCplPiUk7pidbWURvux+XgiZYsGGw7MNjHNafeEt87j5egl6PZr04ZTsorTmLM2urjygQzsrVWx7G4oUnakfGU9sTavXIyZaWCvjDKTs1lwdtYPcP3zdD80/ibLWHhq8/VrPeZcSe9ElTWBDAg2IOozgXsDlVKsWG3FROmlRFgGDADKIxgaIQVapeZQ38oYkLhd90UoidSpnwlmzaBzDSUe6fEwhIURy118oI6IGSTCYlzAHCnb5LiEu1stDYDboMyhQpyFB77+6JJCmUHQqwIQOwz7/Kz/O+Lgk3QyAJBQFTC9vLwvvhgaCEg1CDdCVDEhcEuwiTCJrS6wVsOkDmCY6g9uoQyN8GFnKAqcgLJftpT+/YHh6L3hLi2brYwVMgAAR6csoFCAGILqd7XciBIMSQmNe0OADiStHawSUdYPRId2OR4ZwgLS8cQvPTNnlQWokJCRmdTokcYNLSg2WOpVNU4IUkIYBi9iTwtnElUQjyagGQJSkuQSUlhYkggg6a2ildoT2ziWCbNu5m8RUnKgYSoqZlgYSAQQ2hIPaz3RbVDolMPZcEXsFekAeIIENDnEWSS1oN0CWoKSbjEksWSpN7/qqy5v4QdN5JgoKtMASEIphyRKrspKXuzkMxuOcBUmF0qRF5WvU7QFOAhCWLX5m7/O6M8ZjJWoGBATVFVdfKJUzpdT8gSfGBLcpsrDiQQeF1kVa7uk/Pf3RpYLQVjqOBMoaFNBwgD1CZSSsTGdYSQncLWIG+M9SjcuXosBtYwzDkW0Jny+yx1001MrDfFNmB+CQ9jzceEZMrgF6dtem58j8o+K9OiYU3BuAe8hMayIZdeMa5lbH9C4+vFZ/RyoUZS8ZzmOOJuH90KoAmV1P4hLQGEG6a2lLxypiU+kRpzctB1G9iyw7LxpOMaarptAlV2PMV1MsLfE1+WQ8g3dEot7N0e3auXEgsOg8rlPY91r5Q3KFxHYh7nZyb80Gno0IUpSAxX6W7ugG0w0ytuL2rUxNEUnjTj+yYAfuhi5JKKiW/PcIAuTm0iR1TCqVYGWnD53QvOJWjcEC4CWmS/wDfjDGuWWrT4tC6SoBYfIEPrFuEiyVTIa8E6K6Zk7rbjsjM3wt7maF9nKtAzh8/6hAKg9t8OhYyRMhVf53cuMDlV70rkTLvlcP5v88YkIg4Aa8VxJ+POzxYFktzodZVQgqLJBJPnF2aJKqHVHQNVM6UpJZQIMRrg4SFH03MMOEKZfxtvs7QuoV09n02kEnWUlR7QWtRCkMA7MB3X7jY6c4GIXRe0ETb7I5A+bQ9pkLzldmR5CqpW4mCgJGYi0rkKuCQouWcWA4kwD3RZOo088k8E3LqGBG9wkkk4eJ04nl4Z3SStrcrWwoq6VSktjd+0ktbIWSNAz+MCCicLrPTTlToxMPRJABIY4gD4v3xaqVQ0mFyxYPo9uQziFQLSppQSntMSlIcZOSNH3xUE2CuQLlBqEoWhISoJCX7ByA/d8MvdBhh5ShNQEawfV0sWBUlCw2Rv2h+ySDnk0QA6hTMDIcgFRIGI3uDkBwLAkDu3RopzF1krZZ7JXYoYlJCknECxziOErdmIW5PVLmkYgQQLFnfJiWu94zAEXC1ZxMFMCoQhBEu4OZDC2RDG+hgQwk3ULwAYWXUTcZJDsGF40tbAWSo+Sgpyg0CIFRSgcipWbtFZQdUbaz2ghpIB1VhMbuvnFQhbULSCNQpRpkOXGKDQBZNr4qpXdmqGSipMRIzK4UM84qFbnkmSZXHOLQyrpPGKVSiAZRSJokwm0TerQpZ9IZfjCXAOIHBdGlmaCXarEk7WmGZZ23Z24w7IIUMrerJgUEK1Iuw3WH4+EIbYkKVZcB8UgocdYeFy3WJU4+Nt0SEOYqq3ASQkkFQTbO4JcDVreMC50GExlLOCU+mgSQwXfl+DvC96eScMK0j3r+uqUm05D64SxILh/jeGNeCkVKD2ahBLiGJCJIn4SNzEFs2Nix0MA9mYQm0au7dmVFLGEJS5Ae5Lm++KYzKirVg+ANAqiZxg3NkKqNbduDlU/Nhw1F4DItjsfLYi/wUGGBcx5kyqkCCQFUWzk4XWpOFNyAGDlyPRSWudXjPUELdh3lw7laYqwYJYJHo2B0ATwf5tEFhJUMudA158h0RpNUUhk2ZRF74ha/AFrNpEayQS5U+rlcBT9BFNaA4KHISpR0cvYAb8hCsq0BwM+KFMq/tApKWZJTe+eFXvbwMWGiYKFzjlJah4yUksFMGAJZmIOmW7whj2AJVKoXXQSHIzGIOBqbOQDkVD54Rr4vxUdS4cOHT9kHGkgKSXBDO17G4O7lDmQbrO/M3sk2XGDS1XEd0WrWQhWWUWthR5VUoZHd5Xii0FWHEaIqp7l8/l4gACAuJ1V0nIPaLQSnKJI7a1MyQGFi5cMGOkIrPIAA4rTh2Bxk8E/QbUE9XVrljCbDAPRzvGW7bgrae12XaLPmMHDuHjeDK5LhBhcO4RFUogvuilJV0s273RSkqwVEhSVbSIpKsi4MUVFdG/dFHkia6CCmUzB6JHZOf+0KLeIW5tYceKANnIQSQsZu93Zi6REzE8E1xA1KYnzQWAyTYAxGtKz1qjfJLlWrQ1YCVZB0cAbzkOMU4gImNLjAQtubTVLThlWbJ2bcxfPNy2sZgJMldJxDRlGiwpe1Cv0ikXbECzG90g3AcZZZwwLO4Fen2GodWUH0SVWvYuMWfG+sA6xkI2nMMpQZqWJGoJjQ0kiVz6jQDAQjBIFZKCbgE3awJ90SQNSiDHOEgEqiksWyiwZQkEGCoaIqVVRapSoRFRVVoFwS4IY8Qc8ooiQiY8sMhQkkHTAEgJSBkd55ZCF7sz0TzWbltqh4sIJcJOST+8qyfP3QdQ2S8O2XzyRJ7uSVZAPyDjEeZSS3EQhpF5WtwILY8fJDxsSpRAw3L8SUh+8iLqAA2QYcuLTm9erqAonApihQOJnyORTxSWhgbnElKL904gf6US1lJcOEkAYc0uMlDcWt4RW5govaQQZF1CXe+sOgDRZwS4iSnk7NUoOVBI4gv3hrQnfDgFsGBfNyFMqgQ15gB5NrbO8Vvnck32RnNePByjUlo4EUgVwWMRRFl5iLQlPyJpQQRrYvqHhVRocIKKjULXWWptBAkp6yXZRt45nnxjJSGZ0FdCs4sbIWUlOcblyyuk3MQqIpDRSpSmIojYcuUCrUPFqlbF74pSUVIeBKtVSYuFYJGiMVOAYCE01DYqhVnBAJLnE6qAYtAryUgqCTcGxe8A+7U2iSKgAWT0hzPAKI4W0hLdFvdqvLFIxrG78fw1i1RK9/sG0qWHPopVyLgFuB/EwBUi6JUB1q/xH3xpZ7oXPqe+7vKXMElKNq1a5akIQopThBYWckAknjGQ3JJXWHZY1o0gfEInXGZKlzFAYlC5GuUNo8QsmLix4obO5h6xqjRapc8RCVU5RapVJiKKkxLgPe794yMUWg6omvLdOKhUkKd/wBcBJ5ByPnhC3MFytNKq6GhRixOCAbEdxLtFupgwltrubIC5UNCQTN1UqOURRN7JAM5L3YKPelJUPMQusYYYWzBNDqzQevwCT2zVq60X45nNnOsZ2iAuo8y5OBAL21OSlDIkaGJmKmQL//Z\" alt=\"imagem para ilustrar a doen&ccedil;a\" width=\"307\" height=\"164\" /></p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Curabitur aliquet ex dui, et convallis tellus finibus vel. Proin feugiat congue sollicitudin. Etiam convallis nisi vitae facilisis dictum. Praesent ullamcorper urna vel neque maximus posuere. Maecenas suscipit mi a arcu vulputate sollicitudin at vitae orci. Ut eu enim ultrices, condimentum sapien aliquam, viverra neque. Vivamus iaculis mi ex, venenatis aliquet purus hendrerit quis. Maecenas at egestas arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>&nbsp;</p>', '5f551775a14d9.jpg', 'saude-informa-mais-8-casos-de-covid-19', 11),
(11, 9, '2020-09-09', 'Uma outra edição de saúde pública', '<p><span style=\"color: #999999; font-family: Sanchez, serif; font-size: 18px;\">O profissional administrativo tem amplas possibilidades no mercado de trabalho. No curso T&eacute;cnico em Administra&ccedil;&atilde;o, o aluno &eacute; capacitado a executar atividades administrativas relacionadas aos processos de gest&atilde;o de pessoas, opera&ccedil;&otilde;es log&iacute;sticas, gest&atilde;o de materiais e patrim&ocirc;nio,&nbsp;</span><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: none; box-shadow: none; font-size: 18px; color: #999999; line-height: normal; font-family: Sanchez, serif;\">marketing</em><span style=\"color: #999999; font-family: Sanchez, serif; font-size: 18px;\">, vendas e finan&ccedil;as, por meio da presta&ccedil;&atilde;o de servi&ccedil;os aut&ocirc;nomos, tempor&aacute;rios ou efetivos.</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: none; box-shadow: none; font-size: 18px; color: #999999; line-height: normal; font-family: Sanchez, serif;\" /><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: none; box-shadow: none; font-size: 18px; color: #999999; line-height: normal; font-family: Sanchez, serif;\" /><span style=\"color: #999999; font-family: Sanchez, serif; font-size: 18px;\">Ali&aacute;s, para quem busca seguir carreira nessa profiss&atilde;o t&atilde;o din&acirc;mica, &eacute; preciso ter estudado em uma institui&ccedil;&atilde;o de ensino reconhecida, que garanta ensino de qualidade para se destacar na &aacute;rea. Com mais de 70 anos educando pessoas para o mercado de trabalho, o Senac &eacute; a melhor op&ccedil;&atilde;o para a sua carreira profissional!</span></p>', '5f59100784f65.jpg', 'uma-outra-noticia-sobre-saude-publica', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.servicos`
--

CREATE TABLE `tb_site.servicos` (
  `id` int(11) NOT NULL,
  `servico` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.slides`
--

CREATE TABLE `tb_site.slides` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Índices para tabela `tb_admin.clientes`
--
ALTER TABLE `tb_admin.clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.categorias`
--
ALTER TABLE `tb_site.categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.funcoes`
--
ALTER TABLE `tb_site.funcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.noticias`
--
ALTER TABLE `tb_site.noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_admin.clientes`
--
ALTER TABLE `tb_admin.clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_site.categorias`
--
ALTER TABLE `tb_site.categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_site.funcoes`
--
ALTER TABLE `tb_site.funcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_site.noticias`
--
ALTER TABLE `tb_site.noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
