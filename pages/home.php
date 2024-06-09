<div class="form-container">
<form method="get" id="ddgSearch" action="https://duckduckgo.com/">

<div class="field large prefix round fill">
  <i class="front">search</i>
  <input type="text" name="q" placeholder="Search…" aria-label="Search  on DuckDuckGo"/>
  <input type="hidden" name="sites" value=""/>
    <input type="hidden" name="k7" value="#ffffff"/>
    <input type="hidden" name="k8" value="#222222"/>
    <input type="hidden" name="k9" value="#00278e"/>
    <input type="hidden" name="kx" value="#20692b"/>
    <input type="hidden" name="kj" value="#fafafa"/>
    <input type="hidden" name="kt" value="p"/>
</div>
</form>
</div>
<div class="grid medium-space">
<?php 
    $result = $conn->query('SELECT * FROM `posts` LIMIT 100;');

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<article class='s12 m6 l3'>
            <a href='/posts/" . urlencode($row["title"]) . "'>
            <h5>" . $row["title"] . "</h5>
            </a>
            <p>". $row["summary"] . "</p>
          </article>";
        }
    } else {
        echo "0 results";
    }
?>


</div>