INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (1, 'Admin');
INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (2, 'Campus Manager');
INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (3, 'Responsable pédagogique');
INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (4, 'Formateur');
INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (5, 'Délégué');
INSERT INTO `ga_role` (`Role_ID`, `Role_Name`) VALUES (6, 'Apprenant');
INSERT INTO `ga_user` (`User_ID`, `User_FirstName`, `User_LastName`, `User_Password`, `User_Activated`, `User_Email`, `Role_ID`) VALUES (NULL, 'admin', 'admin', '$2y$10$L18KlpRry5kjyYg6A1FU8uSj1Znd0VOBqHE7vuEbZk3mMA3MWjoJi', '1', 'admin@admin.fr', '1');