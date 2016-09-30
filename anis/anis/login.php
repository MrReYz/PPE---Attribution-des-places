
                       <?php
                        // on teste si le visiteur a soumis le formulaire de connexion
                        if (isset($_POST['connexion'])) {

                            if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
                                

                                $base = mysqli_connect ('localhost', 'root', '', 'anis');
                                //mysqli_select_db ("essaie", $base)  or die("erreur de connexion a la base de donnees");

                                // on teste si une entrée de la base contient ce couple login / pass
                                $sql = 'SELECT * FROM utilisateur WHERE email="'. $_POST['email'].'" AND password="'.$_POST['password'].'"';

                                $req = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
                                $data = mysqli_fetch_array($req);

                                mysqli_free_result($req);
                                mysqli_close($base);

                                // si on obtient une réponse, alors l'utilisateur est un membre
                                //var_dump($data);exit;
                                if ($data != null) {
                                    session_start();
                                    $_SESSION['email'] = $data['email'];
                                    header('Location: reserve.php');
                                    exit();
                                }
                                // sinon, alors la, il y a un gros problème :)
                                else {


                                    echo "<font color=\"red\"> Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.</font>";

                                }

                            }
                            else {
                                echo  "<font color=\"red\"> Au moins un des champs est vide.</font>";
                            }
                        }
                        ?>
