<table class ="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td>Author</td>
                                <td>Title</td>
                                <td>Category</td>
                                <td>Status</td>
                                <td>Image</td>
                                <td>Tags</td>
                                <td>Comments</td>
                                <td>Date</td>
                            </tr>
                        </tbody>
                            <tbody>
                                <?php

                                $query ="SELECT * FROM posts";
                                $select_posts= mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($select_posts)){
                                    $post_id              = $row['post_id'];
                                    $post_category_id     = $row['post_category_id'];
                                    $post_title           = $row['post_title'];
                                    $post_author          = $row['post_author'];
                                    $post_date            = $row['post_date'];
                                    $post_images          = $row['post_images'];
                                    $post_content         = $row['post_content'];
                                    $post_tags            = $row['post_tags'];
                                    $post_comment_count   = $row['post_comment_count'];
                                    $post_status          = $row['post_status'];

                                    echo "<tr>";
                                    echo "<td>{$post_id }</td>";
                                    echo "<td>{$post_author}</td>";
                                    echo "<td>{$post_title}</td>";
                                    echo "<td>{$post_category_id}</td>";
                                    echo "<td>{$post_status  }</td>";
                                    echo "<td><img width = '100' src ='../images/$post_images'></td>";
                                    echo "<td>{$post_tags }</td>";
                                    echo "<td>{$post_content}</td>";
                                    echo "<td>{$post_date}</td>";
                                    echo "</tr>";

                                    }
                                ?>
                         

                             <td>10</td>
                             <td>Yanga Guwa</td>
                             <td>Boostrap framework</td>
                             <td>Bootstrap</td>
                             <td>Status</td>
                             <td>Images</td>
                             <td>Tags</td>
                             <td>Comments</td>
                             <td>Date</td>
                        
                     </tbody>
                    </table>
                     