<?php 
    $title = "Home - Gamespark";
    require_once __DIR__ . "/views/part/header.php"; 
?>

<main>
    <div class="container">
        <div class="homepage-header">
            <h1>Games</h1>
            <a href="/views/users/create.php" class="game-add btn"><span class="plus-icon">+</span>Game toevoegen</a>
        </div>

        <div class="dropdown-menus">
            <div class="dropdown-menu">
                <h2>Platform</h2>
                <div class="dropdown-container">
                    <button type="button" class="dropdown-toggle" aria-expanded="false"
                        aria-controls="platform-dropdown">Alle platforms &#x25BC;</button>

                    <ul class="dropdown" id="platform-dropdown" hidden>
                        <li><a href="#">Alle platforms</a></li>
                    </ul>
                </div>
            </div>

            <div class="dropdown-menu">
                <h2>Genre</h2>
                <div class="dropdown-container">
                    <button type="button" class="dropdown-toggle" aria-expanded="false"
                        aria-controls="genres-dropdown">Alle genres &#x25BC;</button>

                    <ul class="dropdown" id="genres-dropdown" hidden>
                        <li><a href="#">Alle genres</a></li>
                    </ul>
                </div>
            </div>

            <div class="dropdown-menu">
                <h2>Status</h2>
                <div class="dropdown-container">
                    <button type="button" class="dropdown-toggle" aria-expanded="false"
                        aria-controls="statussen-dropdown">Alle statussen &#x25BC;</button>

                    <ul class="dropdown" id="statussen-dropdown" hidden>
                        <li><a href="#">Alle statussen</a></li>
                    </ul>
                </div>
            </div>

            <div class="dropdown-menu">
                <h2>Beoordeling</h2>
                <div class="dropdown-container">
                    <button type="button" class="dropdown-toggle" aria-expanded="false"
                        aria-controls="scores-dropdown">Alle scores &#x25BC;</button>

                    <ul class="dropdown" id="scores-dropdown" hidden>
                        <li><a href="#">Alle scores</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Table of games -->
        <table class="game-table">
            <thead id="game-table-header">
                <tr>
                    <th>Afbeelding</th>
                    <th>Naam</th>
                    <th>Platform</th>
                    <th>Status</th>
                    <th>Rating</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody id="game-table-body">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="action-buttons">
                            <a href="" class="action btn">Bekijken</a>
                            <a href="" class="action btn">Bewerken</a>
                            <a href="" class="action btn">Verwijderen</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="action-buttons">
                            <a href="" class="action btn">Bekijken</a>
                            <a href="" class="action btn">Bewerken</a>
                            <a href="" class="action btn">Verwijderen</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="action-buttons">
                            <a href="" class="action btn">Bekijken</a>
                            <a href="" class="action btn">Bewerken</a>
                            <a href="" class="action btn">Verwijderen</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php require_once __DIR__ . "/views/part/footer.php"; ?>