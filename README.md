# IT635_Midterm
==============
Please Follow the below instructions
-----------------------------------

1. Run Authenticate.php (Takes 2 arguments from STDIN {username + passwd}. Checks these with user table)
2. Use AddEquipment.php to add equipment (Takes 5 arguments from STDIN)
3. Use AddJobSite.php to add a job site (Takes 5 arguments from STDIN)
4. Use AddEquipmentStatus.php to add a new row in the Equipment status table. Only allows you to add new records, cannot update. Has checks to ensure machine is not in use or broken (Takes 5 arguments from STDIN)
5. Use UpdateEquipmentStatus.php to either complete a machine's use and free it or mark it as fixed (also freeing it). (Takes 3 arguments from STDIN)
6. Use AddJobMaterials to add materials to a specific job site (Takes 3 arguments from STDIN)
7. Use EquipmentReport.php to show which machines a job currently needs and for what material (Takes 1 argument from STDIN)
8. Use JobReport.php to show a job's status (completed or on going), the dates, tonnage, and what equipment is still needed for the on going job (takes 1 argument from STDIN)
9. Use PartReport.php to display the parts for a particular machine (takes 1 argument [machineID] from STDIN).
10. Use UpdateMaintenance.php to either Correct the Last Maintenance (option 2) or enter the Next Maintenance (option 1). Option 1 will automatically update the last Maintenance to the previously scheduled next mainetance. (Takes 3 Arguments) 
