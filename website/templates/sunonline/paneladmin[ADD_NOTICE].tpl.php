{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">INÍCIO</a> &gt; <strong>PAINEL DO ADMIN</strong>
                </div>
                <h3 class="subtitle">Painel do admin</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelAdmin} 
                            
                    <h1 style="margin-top: 20px;">Adcionar notícia</h1>
                    
                    <script type="text/javascript">
                        /* Base64 conversion methods.
                        * Copyright (c) 2006 by Ali Farhadi.
                        * released under the terms of the Gnu Public License.
                        * see the GPL for details.
                        *
                        * Email: ali[at]farhadi[dot]ir
                        * Website: http://farhadi.ir/
                        */
                                                
                        //Encodes data to Base64 format
                        function base64Encode(data){
                            if (typeof(btoa) == 'function') return btoa(data);//use internal base64 functions if available (gecko only)
                            var b64_map = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
                            var byte1, byte2, byte3;
                            var ch1, ch2, ch3, ch4;
                            var result = new Array(); //array is used instead of string because in most of browsers working with large arrays is faster than working with large strings
                            var j=0;
                            for (var i=0; i<data.length; i+=3) {
                                byte1 = data.charCodeAt(i);
                                byte2 = data.charCodeAt(i+1);
                                byte3 = data.charCodeAt(i+2);
                                ch1 = byte1 >> 2;
                                ch2 = ((byte1 & 3) << 4) | (byte2 >> 4);
                                ch3 = ((byte2 & 15) << 2) | (byte3 >> 6);
                                ch4 = byte3 & 63;
                                
                                if (isNaN(byte2)) {
                                    ch3 = ch4 = 64;
                                } else if (isNaN(byte3)) {
                                    ch4 = 64;
                                }

                                result[j++] = b64_map.charAt(ch1)+b64_map.charAt(ch2)+b64_map.charAt(ch3)+b64_map.charAt(ch4);
                            }

                            return result.join('');
                        }

                        //Decodes Base64 formated data
                        function base64Decode(data){
                            data = data.replace(/[^a-z0-9\+\/=]/ig, '');// strip none base64 characters
                            if (typeof(atob) == 'function') return atob(data);//use internal base64 functions if available (gecko only)
                            var b64_map = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
                            var byte1, byte2, byte3;
                            var ch1, ch2, ch3, ch4;
                            var result = new Array(); //array is used instead of string because in most of browsers working with large arrays is faster than working with large strings
                            var j=0;
                            while ((data.length%4) != 0) {
                                data += '=';
                            }
                            
                            for (var i=0; i<data.length; i+=4) {
                                ch1 = b64_map.indexOf(data.charAt(i));
                                ch2 = b64_map.indexOf(data.charAt(i+1));
                                ch3 = b64_map.indexOf(data.charAt(i+2));
                                ch4 = b64_map.indexOf(data.charAt(i+3));

                                byte1 = (ch1 << 2) | (ch2 >> 4);
                                byte2 = ((ch2 & 15) << 4) | (ch3 >> 2);
                                byte3 = ((ch3 & 3) << 6) | ch4;

                                result[j++] = String.fromCharCode(byte1);
                                if (ch3 != 64) result[j++] = String.fromCharCode(byte2);
                                if (ch4 != 64) result[j++] = String.fromCharCode(byte3);    
                            }

                            return result.join('');
                        }
                    </script>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                         <form action="?page=paneladmin&amp;option=ADD_NOTICE&amp;Write=true" method="post" name="noticeFrom">
                            <em>Titulo:</em><br /><input name="subject" type="text" class="inputbox" value="" maxlength="50" /> <br />
                            <em>Notícia:</em><br /><textarea name="content" cols="80" rows="6" id="content">Aceita codigos HTML.</textarea><br />
                            <input type="submit" value="Adicionar." class="button" onclick="noticeFrom.content.value = base64Encode(noticeFrom.content.value);" style="margin-top:10px;"/>
                         </form>
                         <div class="quadrosOut">
                            {#RESULTTPL}
                         </div>
                    </div>
                            
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}
