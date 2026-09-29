<?php
require_once __DIR__ . '/config.php';

function storetogo_news($limit = null)
{
    global $con;
    if (!$con) {
        return [];
    }

    // Select one image per article without relying on permissive GROUP BY mode.
    $sql = 'SELECT news.*, news.id AS newsid, news_image.file FROM news
        LEFT JOIN news_image ON news_image.id =
            (SELECT MIN(id) FROM news_image WHERE nid = news.id)
        ORDER BY news.tstamp DESC, news.id DESC';
    if ($limit !== null) {
        $sql .= ' LIMIT ' . max(1, (int) $limit);
    }

    try {
        $result = $con->query($sql);
        if ($result === false) {
            error_log('Storetogo news query failed: ' . $con->error);
            return [];
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (mysqli_sql_exception $error) {
        error_log('Storetogo news query failed: ' . $error->getMessage());
        return [];
    }
}
