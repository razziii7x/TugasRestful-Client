<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Add New Character Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name_char">Character Name</label>
                            <input type="text" name="name_char" class="form-control" id="name_char">
                            <small class="form-text text-danger"><?= form_error('name_char'); ?></small>
                        </div>
                        <div class="form-group">
                        <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="star">Rarity Star</label>
                            <select class="form-control" id="star" name="star">
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="organization">Organization</label>
                            <input type="text" name="organization" class="form-control" id="organization">
                            <small class="form-text text-danger"><?= form_error('organization'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="origin">Origin</label>
                            <select class="form-control" id="origin" name="origin">
                                <option value="Mondstadt">Mondstadt</option>
                                <option value="Liyue">Liyue</option>
                                <option value="Inazuma">Inazuma</option>
                                <option value="Sumeru">Sumeru</option>
                                <option value="Fontaine">Fontaine</option>
                                <option value="Natlan">Natlan</option>
                                <option value="Snezhnaya">Snezhnaya</option>
                                <option value="Khaenriah">Khaenri'ah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="constellation">Constellation</label>
                            <input type="text" name="constellation" class="form-control" id="constellation">
                            <small class="form-text text-danger"><?= form_error('constellation'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="element">Element</label>
                            <select class="form-control" id="element" name="element">
                                <option value="Pyro / Fire" style="color:rgb(255, 0, 0)">Pyro / Fire</option>
                                <option value="Hydro / Water" style="color:rgb(0,0,255)">Hydro / Water</option>
                                <option value="Anemo / Wind"  style="color:rgb(153, 255, 204)">Anemo / Wind</option>
                                <option value="Geo / Earth" style="color:rgb(255, 204, 0)">Geo / Earth</option>
                                <option value="Electro / Lighting" style="color:rgb(204, 51, 255)">Electro / Lighting</option>
                                <option value="Cryo / Ice" style="color:rgb(153, 204, 255)">Cryo / Ice</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="weapon">Weapon</label>
                            <select class="form-control" id="weapon" name="weapon">
                                <option value="Bow">Bow</option>
                                <option value="Catalyst">Catalyst</option>
                                <option value="Claymore">Claymore</option>
                                <option value="Sword">Sword</option>
                                <option value="Polearm">Polearm</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vo_japanese">Voice Actor Japanese</label>
                            <input type="text" name="vo_japanese" class="form-control" id="vo_japanese">
                            <small class="form-text text-danger"><?= form_error('vo_japanese'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="vo_chinese">Voice Actor Chinese</label>
                            <input type="text" name="vo_chinese" class="form-control" id="vo_chinese">
                            <small class="form-text text-danger"><?= form_error('vo_chinese'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="vo_english">Voice Actor English</label>
                            <input type="text" name="vo_english" class="form-control" id="vo_english">
                            <small class="form-text text-danger"><?= form_error('vo_english'); ?></small>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>