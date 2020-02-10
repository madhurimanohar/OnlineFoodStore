<html>
<head>
	<title>
		Add an Item
	</title>
</head>
<body>
	<?php
		session_start();
        if (isset($_POST['apple'])) {
            $numOfApples = $_POST['numberOfApples'];
						//reject negative inputs
            if ($numOfApples <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
						//add items to the cart
                    if ($_SESSION['stock']['apple'] >= $numOfApples) {
                        $_SESSION['products']['apple'] = $_SESSION['products']['apple'] + $numOfApples;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
             else {
						//check availability
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }
        if (isset($_POST['banana'])) {
            $numOfBananas = $_POST['numberOfBananas'];
            if ($numOfBananas <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['banana'] >= $numOfBananas) {
                        $_SESSION['products']['banana'] = $_SESSION['products']['banana'] + $numOfBananas;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }
        if (isset($_POST['pear'])) {
            $numOfPears = $_POST['numberOfPears'];
            if ($numOfPears <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['pear'] >= $numOfBananas) {
                        $_SESSION['products']['pear'] = $_SESSION['products']['pear'] + $numOfPears;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['mango'])) {
            $numOfMangoes = $_POST['numberOfMangoes'];
            if ($numOfMangoes <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['mango'] >= $numOfMangoes) {
                        $_SESSION['products']['mango'] = $_SESSION['products']['mango'] + $numOfMangoes;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['strawberry'])) {
            $numOfStrawberries = $_POST['numberOfStrawberries'];
            if ($numOfStrawberries <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['strawberry'] >= $numOfStrawberries) {
                        $_SESSION['products']['strawberry'] = $_SESSION['products']['strawberry'] + $numOfStrawberries;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['pineapple'])) {
            $numOfPineapples = $_POST['numberOfPineapples'];
            if ($numOfPineapples <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['pineapple'] >= $numOfPineapples) {
                        $_SESSION['products']['pineapple'] = $_SESSION['products']['pineapple'] + $numOfPineapples;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['peach'])) {
             $numOfPeaches = $_POST['numberOfPeaches'];
             if ($numOfPeaches <= 0) {
                     echo "<script>
                     alert('Please enter a valid value.');
                     window.location.href='Products.php';
                     </script>
                     ";
                 }
             else {
                     if ($_SESSION['stock']['peach'] >= $numOfPeaches) {
                         $_SESSION['products']['peach'] = $_SESSION['products']['peach'] + $numOfPeaches;
                         echo "<script>
                         alert('Cart Updated.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                     else {
                         echo "<script>
                         alert('Not enough stock.');
                         window.location.href='Products.php';
                         </script>
                         ";
                         }
                 }
         }

        if (isset($_POST['watermelon'])) {
             $numOfWatermelons = $_POST['numberOfWatermelons'];
             if ($numOfWatermelons <= 0) {
                     echo "<script>
                     alert('Please enter a valid value.');
                     window.location.href='Products.php';
                     </script>
                     ";
                 }
             else {
                     if ($_SESSION['stock']['watermelon'] >= $numOfWatermelons) {
                         $_SESSION['products']['watermelon'] = $_SESSION['products']['watermelon'] + $numOfWatermelons;
                         echo "<script>
                         alert('Cart Updated.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                     else {
                         echo "<script>
                         alert('Not enough stock.');
                         window.location.href='Products.php';
                         </script>
                         ";
                         }
                 }
         }

        if (isset($_POST['celery'])) {
             $numOfCelery = $_POST['numberOfCelery'];
             if ($numOfCelery <= 0) {
                     echo "<script>
                     alert('Please enter a valid value.');
                     window.location.href='Products.php';
                     </script>
                     ";
                 }
             else {
                     if ($_SESSION['stock']['celery'] >= $numOfCelery) {
                         $_SESSION['products']['celery'] = $_SESSION['products']['celery'] + $numOfCelery;
                         echo "<script>
                         alert('Cart Updated.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                     else {
                         echo "<script>
                         alert('Not enough stock.');
                         window.location.href='Products.php';
                         </script>
                         ";
                         }
                 }
         }

        if (isset($_POST['carrot'])) {
               $numOfCarrots = $_POST['numberOfCarrots'];
               if ($numOfCarrots <= 0) {
                       echo "<script>
                       alert('Please enter a valid value.');
                       window.location.href='Products.php';
                       </script>
                       ";
                   }
               else {
                       if ($_SESSION['stock']['carrot'] >= $numOfCarrots) {
                           $_SESSION['products']['carrot'] = $_SESSION['products']['carrot'] + $numOfCarrots;
                           echo "<script>
                           alert('Cart Updated.');
                           window.location.href='Products.php';
                           </script>
                           ";
                       }
                       else {
                           echo "<script>
                           alert('Not enough stock.');
                           window.location.href='Products.php';
                           </script>
                           ";
                           }
                   }
           }

        if (isset($_POST['broccoli'])) {
               $numOfBroccoli = $_POST['numberOfBroccoli'];
               if ($numOfBroccoli <= 0) {
                       echo "<script>
                       alert('Please enter a valid value.');
                       window.location.href='Products.php';
                       </script>
                       ";
                   }
               else {
                       if ($_SESSION['stock']['broccoli'] >= $numOfBroccoli) {
                           $_SESSION['products']['broccoli'] = $_SESSION['products']['broccoli'] + $numOfBroccoli;
                           echo "<script>
                           alert('Cart Updated.');
                           window.location.href='Products.php';
                           </script>
                           ";
                       }
                       else {
                           echo "<script>
                           alert('Not enough stock.');
                           window.location.href='Products.php';
                           </script>
                           ";
                           }
                   }
           }

        if (isset($_POST['potato'])) {
                $numOfPotato = $_POST['numberOfPotatoes'];
                if ($numOfPotato <= 0) {
                        echo "<script>
                        alert('Please enter a valid value.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                else {
                        if ($_SESSION['stock']['potato'] >= $numOfPotato) {
                            $_SESSION['products']['potato'] = $_SESSION['products']['potato'] + $numOfPotato;
                            echo "<script>
                            alert('Cart Updated.');
                            window.location.href='Products.php';
                            </script>
                            ";
                        }
                        else {
                            echo "<script>
                            alert('Not enough stock.');
                            window.location.href='Products.php';
                            </script>
                            ";
                            }
                    }
            }
        if (isset($_POST['lettuce'])) {
                 $numOfLettuce = $_POST['numberOfLettuce'];
                 if ($numOfLettuce <= 0) {
                         echo "<script>
                         alert('Please enter a valid value.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                 else {
                         if ($_SESSION['stock']['lettuce'] >= $numOfLettuce) {
                             $_SESSION['products']['lettuce'] = $_SESSION['products']['lettuce'] + $numOfLettuce;
                             echo "<script>
                             alert('Cart Updated.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                         else {
                             echo "<script>
                             alert('Not enough stock.');
                             window.location.href='Products.php';
                             </script>
                             ";
                             }
                     }
             }

        if (isset($_POST['onion'])) {
            $numOfOnion = $_POST['numberOfOnions'];
            if ($numOfOnion <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['onion'] >= $numOfOnion) {
                        $_SESSION['products']['onion'] = $_SESSION['products']['onion'] + $numOfOnion;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['pepper'])) {
            $numOfPepper = $_POST['numberOfPepper'];
            if ($numOfPepper <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['pepper'] >= $numOfPepper) {
                        $_SESSION['products']['pepper'] = $_SESSION['products']['pepper'] + $numOfPepper;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['corn'])) {
            $numOfCorn = $_POST['numberOfCorn'];
            if ($numOfCorn <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['corn'] >= $numOfCorn) {
                        $_SESSION['products']['corn'] = $_SESSION['products']['corn'] + $numOfCorn;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['ribeye'])) {
            $numOfRib = $_POST['numberOfRibeye'];
            if ($numOfRib <= 0) {
                    echo "<script>
                    alert('Please enter a valid value.');
                    window.location.href='Products.php';
                    </script>
                    ";
                }
            else {
                    if ($_SESSION['stock']['ribeye'] >= $numOfRib) {
                        $_SESSION['products']['ribeye'] = $_SESSION['products']['ribeye'] + $numOfRib;
                        echo "<script>
                        alert('Cart Updated.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                    else {
                        echo "<script>
                        alert('Not enough stock.');
                        window.location.href='Products.php';
                        </script>
                        ";
                        }
                }
        }

        if (isset($_POST['breast'])) {
             $numOfBre = $_POST['numberOfBreasts'];
             if ($numOfBre <= 0) {
                     echo "<script>
                     alert('Please enter a valid value.');
                     window.location.href='Products.php';
                     </script>
                     ";
                 }
             else {
                     if ($_SESSION['stock']['breast'] >= $numOfBre) {
                         $_SESSION['products']['breast'] = $_SESSION['products']['breast'] + $numOfBre;
                         echo "<script>
                         alert('Cart Updated.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                     else {
                         echo "<script>
                         alert('Not enough stock.');
                         window.location.href='Products.php';
                         </script>
                         ";
                         }
                 }
         }

        if (isset($_POST['porkchop'])) {
              $numOfPorkchop = $_POST['numberOfPorkchop'];
              if ($numOfPorkchop <= 0) {
                      echo "<script>
                      alert('Please enter a valid value.');
                      window.location.href='Products.php';
                      </script>
                      ";
                  }
              else {
                      if ($_SESSION['stock']['porkchop'] >= $numOfPorkchop) {
                          $_SESSION['products']['porkchop'] = $_SESSION['products']['porkchop'] + $numOfPorkchop;
                          echo "<script>
                          alert('Cart Updated.');
                          window.location.href='Products.php';
                          </script>
                          ";
                      }
                      else {
                          echo "<script>
                          alert('Not enough stock.');
                          window.location.href='Products.php';
                          </script>
                          ";
                          }
                  }
          }

        if (isset($_POST['chickenleg'])) {
               $numOfChickenleg = $_POST['numberOfChickenlegs'];
               if ($numOfChickenleg <= 0) {
                       echo "<script>
                       alert('Please enter a valid value.');
                       window.location.href='Products.php';
                       </script>
                       ";
                   }
               else {
                       if ($_SESSION['stock']['chickenleg'] >= $numOfChickenleg) {
                           $_SESSION['products']['chickenleg'] = $_SESSION['products']['chickenleg'] + $numOfChickenleg;
                           echo "<script>
                           alert('Cart Updated.');
                           window.location.href='Products.php';
                           </script>
                           ";
                       }
                       else {
                           echo "<script>
                           alert('Not enough stock.');
                           window.location.href='Products.php';
                           </script>
                           ";
                           }
                   }
           }

        if (isset($_POST['salmon'])) {
                $numOfSalmon = $_POST['numberOfSalmon'];
                if ($numOfSalmon <= 0) {
                        echo "<script>
                        alert('Please enter a valid value.');
                        window.location.href='Products.php';
                        </script>
                        ";
                    }
                else {
                        if ($_SESSION['stock']['salmon'] >= $numOfSalmon) {
                            $_SESSION['products']['salmon'] = $_SESSION['products']['salmon'] + $numOfSalmon;
                            echo "<script>
                            alert('Cart Updated.');
                            window.location.href='Products.php';
                            </script>
                            ";
                        }
                        else {
                            echo "<script>
                            alert('Not enough stock.');
                            window.location.href='Products.php';
                            </script>
                            ";
                            }
                    }
            }

        if (isset($_POST['lambleg'])) {
                 $numOfLamblegs = $_POST['numberOfLamblegs'];
                 if ($numOfLamblegs <= 0) {
                         echo "<script>
                         alert('Please enter a valid value.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                 else {
                         if ($_SESSION['stock']['lambleg'] >= $numOfLamblegs) {
                             $_SESSION['products']['lambleg'] = $_SESSION['products']['lambleg'] + $numOfLamblegs;
                             echo "<script>
                             alert('Cart Updated.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                         else {
                             echo "<script>
                             alert('Not enough stock.');
                             window.location.href='Products.php';
                             </script>
                             ";
                             }
                     }
             }
        if (isset($_POST['porkbelly'])) {
                 $numOfPorkbelly = $_POST['numberOfPorkbelly'];
                 if ($numOfPorkbelly <= 0) {
                         echo "<script>
                         alert('Please enter a valid value.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                 else {
                         if ($_SESSION['stock']['porkbelly'] >= $numOfPorkbelly) {
                             $_SESSION['products']['porkbelly'] = $_SESSION['products']['porkbelly'] + $numOfPorkbelly;
                             echo "<script>
                             alert('Cart Updated.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                         else {
                             echo "<script>
                             alert('Not enough stock.');
                             window.location.href='Products.php';
                             </script>
                             ";
                             }
                     }
             }

        if (isset($_POST['chickenwing'])) {
                 $numOfChickenWing = $_POST['numberOfChickenwings'];
                 if ($numOfChickenWing <= 0) {
                         echo "<script>
                         alert('Please enter a valid value.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                 else {
                         if ($_SESSION['stock']['chickenwing'] >= $numOfChickenWing) {
                             $_SESSION['products']['chickenwing'] = $_SESSION['products']['chickenwing'] + $numOfChickenWing;
                             echo "<script>
                             alert('Cart Updated.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                         else {
                             echo "<script>
                             alert('Not enough stock.');
                             window.location.href='Products.php';
                             </script>
                             ";
                             }
                     }
             }

        if (isset($_POST['wholemilk'])) {
                 $numOfWmilk = $_POST['numberOfWholemilk'];
                 if ($numOfWmilk <= 0) {
                         echo "<script>
                         alert('Please enter a valid value.');
                         window.location.href='Products.php';
                         </script>
                         ";
                     }
                 else {
                         if ($_SESSION['stock']['wholemilk'] >= $numOfWmilk) {
                             $_SESSION['products']['wholemilk'] = $_SESSION['products']['wholemilk'] + $numOfWmilk;
                             echo "<script>
                             alert('Cart Updated.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                         else {
                             echo "<script>
                             alert('Not enough stock.');
                             window.location.href='Products.php';
                             </script>
                             ";
                             }
                     }
             }

        if (isset($_POST['soymilk'])) {
                   $numOfsoy = $_POST['numberOfSoymilk'];
                   if ($numOfsoy <= 0) {
                           echo "<script>
                           alert('Please enter a valid value.');
                           window.location.href='Products.php';
                           </script>
                           ";
                       }
                   else {
                           if ($_SESSION['stock']['soymilk'] >= $numOfsoy) {
                               $_SESSION['products']['soymilk'] = $_SESSION['products']['soymilk'] + $numOfsoy;
                               echo "<script>
                               alert('Cart Updated.');
                               window.location.href='Products.php';
                               </script>
                               ";
                           }
                           else {
                               echo "<script>
                               alert('Not enough stock.');
                               window.location.href='Products.php';
                               </script>
                               ";
                               }
                       }
               }
        if (isset($_POST['egg'])) {
                    $numOfEgg = $_POST['numberOfEggs'];
                    if ($numOfEgg <= 0) {
                            echo "<script>
                            alert('Please enter a valid value.');
                            window.location.href='Products.php';
                            </script>
                            ";
                        }
                    else {
                            if ($_SESSION['stock']['egg'] >= $numOfEgg) {
                                $_SESSION['products']['egg'] = $_SESSION['products']['egg'] + $numOfEgg;
                                echo "<script>
                                alert('Cart Updated.');
                                window.location.href='Products.php';
                                </script>
                                ";
                            }
                            else {
                                echo "<script>
                                alert('Not enough stock.');
                                window.location.href='Products.php';
                                </script>
                                ";
                                }
                        }
                }
        if (isset($_POST['yogurt'])) {
                     $numOfYog = $_POST['numberOfYogurt'];
                     if ($numOfYog <= 0) {
                             echo "<script>
                             alert('Please enter a valid value.');
                             window.location.href='Products.php';
                             </script>
                             ";
                         }
                     else {
                             if ($_SESSION['stock']['yogurt'] >= $numOfYog) {
                                 $_SESSION['products']['yogurt'] = $_SESSION['products']['yogurt'] + $numOfYog;
                                 echo "<script>
                                 alert('Cart Updated.');
                                 window.location.href='Products.php';
                                 </script>
                                 ";
                             }
                             else {
                                 echo "<script>
                                 alert('Not enough stock.');
                                 window.location.href='Products.php';
                                 </script>
                                 ";
                                 }
                         }
                 }

        if (isset($_POST['butter'])) {
                       $numOfBut = $_POST['numberOfButter'];
                       if ($numOfBut <= 0) {
                               echo "<script>
                               alert('Please enter a valid value.');
                               window.location.href='Products.php';
                               </script>
                               ";
                           }
                       else {
                               if ($_SESSION['stock']['butter'] >= $numOfBut) {
                                   $_SESSION['products']['butter'] = $_SESSION['products']['butter'] + $numOfBut;
                                   echo "<script>
                                   alert('Cart Updated.');
                                   window.location.href='Products.php';
                                   </script>
                                   ";
                               }
                               else {
                                   echo "<script>
                                   alert('Not enough stock.');
                                   window.location.href='Products.php';
                                   </script>
                                   ";
                                   }
                           }
                   }
        if (isset($_POST['acheese'])) {
                         $numOfAcheese = $_POST['numberOfAcheese'];
                         if ($numOfAcheese <= 0) {
                                 echo "<script>
                                 alert('Please enter a valid value.');
                                 window.location.href='Products.php';
                                 </script>
                                 ";
                             }
                         else {
                                 if ($_SESSION['stock']['acheese'] >= $numOfAcheese) {
                                     $_SESSION['products']['acheese'] = $_SESSION['products']['acheese'] + $numOfAcheese;
                                     echo "<script>
                                     alert('Cart Updated.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                 }
                                 else {
                                     echo "<script>
                                     alert('Not enough stock.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                     }
                             }
                     }
        if (isset($_POST['scheese'])) {
                         $numOfScheese = $_POST['numberOfScheese'];
                         if ($numOfScheese <= 0) {
                                 echo "<script>
                                 alert('Please enter a valid value.');
                                 window.location.href='Products.php';
                                 </script>
                                 ";
                             }
                         else {
                                 if ($_SESSION['stock']['scheese'] >= $numOfScheese) {
                                     $_SESSION['products']['scheese'] = $_SESSION['products']['scheese'] + $numOfScheese;
                                     echo "<script>
                                     alert('Cart Updated.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                 }
                                 else {
                                     echo "<script>
                                     alert('Not enough stock.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                     }
                             }
                     }
        if (isset($_POST['cream'])) {
                         $numOfCream = $_POST['numberOfCream'];
                         if ($numOfCream <= 0) {
                                 echo "<script>
                                 alert('Please enter a valid value.');
                                 window.location.href='Products.php';
                                 </script>
                                 ";
                             }
                         else {
                                 if ($_SESSION['stock']['cream'] >= $numOfCream) {
                                     $_SESSION['products']['cream'] = $_SESSION['products']['cream'] + $numOfCream;
                                     echo "<script>
                                     alert('Cart Updated.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                 }
                                 else {
                                     echo "<script>
                                     alert('Not enough stock.');
                                     window.location.href='Products.php';
                                     </script>
                                     ";
                                     }
                             }
                     }
	 ?>
</body>
</html>
