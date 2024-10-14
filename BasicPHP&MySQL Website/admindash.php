<!doctype html>
<html style="font-size: 16px" lang="en" class="u-responsive-xl">
    <head>
        <link
            rel="stylesheet"
            href="css/nicepage.css"
            media="screen"
        />
        <link
            rel="stylesheet"
            href="css/nicepage-site.css"
            media="screen"
        />
        <link
            rel="stylesheet"
            href="css/Page-9.css"
            media="screen"
        />
        <link
            id="u-theme-google-font"
            rel="stylesheet"
            href="css/css_002.css"
        />
        <link
            id="u-page-google-font"
            rel="stylesheet"
            href="css/css.css"
        />
    </head>
    <body
        data-path-to-root="/"
        data-include-products="false"
        class="u-body u-xl-mode"
        data-lang="en"
    >
        <section class="u-clearfix u-section-1" id="sec-f13d">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div
                    class="u-expanded-width u-table u-table-responsive u-table-1"
                >
                    <table class="u-table-entity">
                        <colgroup>
                            <col width="10%" />
                            <col width="20%" />
                            <col width="20%" />
                            <col width="30%" />
                            <col width="10%" />
                            <col width="10%" />
                        </colgroup>
                        <thead class="u-table-header">
                            <tr style="height: 70px">
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    ID
                                </th>
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    Name
                                </th>
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    Last Name
                                </th>
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    E-Mail
                                </th>
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    Delete
                                </th>
                                <th
                                    class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell"
                                >
                                    Modify
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="u-custom-font u-font-ubuntu u-table-body u-table-body-1"
                        >
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "test";

                            $conn = new mysqli(
                                $servername,
                                $username,
                                $password,
                                $dbname
                            );

                            $sql =
                                "SELECT id, Prénom, Nom, Email,username FROM Eleve;";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr style="height: 70px">
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell" style="font-size: 16px;">
                                                ' .
                                        $row["id"] .
                                        '
                                            </td>
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell" style="font-size: 16px;">
                                                ' .
                                        $row["Prénom"] .
                                        '
                                            </td>
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell" style="font-size: 16px;">
                                                ' .
                                        $row["Nom"] .
                                        '
                                            </td>
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell" style="font-size: 16px;">
                                                ' .
                                        $row["Email"] .
                                        '
                                            </td>
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
                                                <!-- frame: Delete -->
                                                <a href="delete.php?username=' .
                                        $row["username"] .
                                        '" onclick="return confirmDelete();">
                                                    <div class="frame delete-1df2856dae18">
                                                        <!-- rect: Rectangle -->
                                                        <div class="shape rect rectangle-1df22eaa070f"></div>
                                                        <!-- rect: delete_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24 -->
                                                        <div class="shape rect delete24d-1df2273e53d4"></div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="u-border-1 u-border-grey-dark-1 u-border-no-left u-border-no-right u-custom-font u-first-column u-font-ubuntu u-table-cell u-table-cell-5">
                                                <!-- frame: Change -->
                                                <a href="modify.php?username=' .
                                        $row["username"] .
                                        '">
                                                    <div class="frame change-1df3d7cbc23a">
                                                        <!-- rect: Rectangle -->
                                                        <div class="shape rect rectangle-1df3d7cbc23b"></div>
                                                        <!-- rect: edit_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24 -->
                                                        <div class="shape rect edit24dp-1df4cb6d2ef1"></div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <script>
                                    function confirmDelete() {
                                        return confirm("Are you sure you want to delete this user?");
                                    }
                                    </script>';
                                }
                            }
                            $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>
