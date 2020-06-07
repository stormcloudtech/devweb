<?php 

class Blog 
{
	public static function postsRecentes($totalPosts)
	{
		$totalPosts = intval($totalPosts);
		$postsRecentes = [];
		$query = 'SELECT * FROM `tb_site.noticias` ORDER BY id DESC LIMIT '.$totalPosts;
		$sql = MySql::conectar()->prepare($query);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$postsRecentes = $sql->fetchAll();
		}

		return $postsRecentes;
	}

	public static function getCategoriaBySlug($slug)
	{
		$categoria = MySql::conectar()->prepare('SELECT * FROM `tb_site.categorias` WHERE slug = ?');
		$categoria->execute(array($slug));
		$categoria = $categoria->fetch();
		return $categoria;
	}

	public static function getCategoriaSlugByCategoriaId($id)
	{
		$categoriaSlug = MySql::conectar()->prepare('SELECT slug FROM `tb_site.categorias` WHERE id = ? LIMIT 1');
		$categoriaSlug->execute(array($id));
		$categoriaSlug = $categoriaSlug->fetch()[0];
		return $categoriaSlug;
	}
}
