<?php 
    $title = "Add game - Gamespark";
    require_once __DIR__ . "/../part/header.php"; 
?>

<main>
    <div class="container">
        <div class="game-add-header">
            <a href="index.php" class="back-home">&#x2B05; Terug naar games</a>
            <h1 class="add-game-h1">Game toevoegen</h1>
        </div>

        <form action="" method="POST" class="add-game-form">
            <div class="form-group">
                <label for="game-name">Naam game *</label>
                <input type="text" id="game-name" name="game-name" required>
            </div>
            <div class="form-group">
                <label for="game-image">Afbeelding *</label>
                <input type="file" id="game-image" name="game-image" accept="image/png, image/jpeg, image/webp"
                    required>
            </div>
            <div class="form-group">
                <label for="game-platform">Platform *</label>
                <select id="game-platform" name="game-platform" required>
                    <option value="" disabled selected>Selecteer een platform</option>
                    <option value="pc">PC</option>
                    <option value="playstation">Playstation</option>
                    <option value="xbox">Xbox</option>
                    <option value="switch">Switch</option>
                </select>
            </div>
            <div class="form-group">
                <label for="game-genre">Genre *</label>
                <select id="game-genre" name="game-genre" required>
                    <option value="" disabled selected>Selecteer een genre</option>
                    <option value="action">Action</option>
                    <option value="rpg">RPG</option>
                    <option value="strategy">Strategy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="game-releaseyear">Releasejaar *</label>
                <input type="number" id="game-releaseyear" name="game-releaseyear" min="1900" max="2099" step="1"
                    placeholder="1999" required>
            </div>
            <div class="form-group">
                <label for="game-status">Status *</label>
                <select id="game-status" name="game-status" required>
                    <option value="" disabled selected>Selecteer een status</option>
                    <option value="wishlist">Wishlist</option>
                    <option value="in-bezit">In bezit</option>
                    <option value="speelt-nu">Speelt nu</option>
                    <option value="uitgespeeld">Uitgespeeld</option>
                </select>
            </div>
            <div class="form-group">
                <label for="game-rating">Beoordeling (1-10) *</label>
                <input type="text" id="game-rating" name="game-rating" min="1" max="10" step="1" required>
            </div>

            <div class="add-game-form-btns">
                <button type="submit" class="btn">Opslaan</button>
                <button type="reset" class="btn btn-secondary">Annuleren</button>
            </div>




        </form>
    </div>
</main>

<?php require_once __DIR__ . "/../part/footer.php"; ?>