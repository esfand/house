DEVNOTES
========

### SQL

#### Obtenir tout les bookmarks : 

<pre><code>
select id,user_id,url,description,title,created_at,
GROUP_CONCAT(tags.tag) as tags
from bookmarks 
join tags on tags.bookmark_id = bookmarks.id 
group by bookmarks.id
</code></pre>

<pre><code>
SELECT id,url,title,description, created_at ,GROUP_CONCAT(tag,',')AS tags FROM bookmarks LEFT OUTER JOIN tags ON bookmarks.id = tags.bookmark_id WHERE  user_id = 1 GROUP BY id ORDER BY created_at DESC  LIMIT 0, 50 

</code></pre>

### SSH

#### Installer sa clé SSH sur un serveur distant

http://prendreuncafe.com/blog/post/2005/08/29/262-installer-sa-cle-ssh-sur-un-serveur-distant

#### Utiliser SSH

http://www.linux-france.org/prj/edu/archinet/systeme/ch13s03.html