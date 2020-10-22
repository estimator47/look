@extends('front.layout')

@section('css')
    <style>
        h3 {
            color: red;
            text-align: center;
        }
        th {
            background-color: #ce4e4e;
            color: white;
        }
        p{
            color: black;
        }
    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <div id="page-title">
                <h1><span>{{__('message.size')}}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div><h3>{{__('text.for_woman')}}</h3></div>
                    <div class="unit whole table-responsive">
                        <table class="table table-hover table-secondary">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">S</th>
                                <th scope="col">M</th>
                                <th scope="col">L</th>
                                <th scope="col">XL</th>
                                <th scope="col">XXL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr >
                                <td>{{__('text.ru_size')}}</td>
                                <td>44</td>
                                <td>46</td>
                                <td>48</td>
                                <td>50</td>
                                <td>52</td>
                            </tr>
                            <tr >
                                <td>{{__('text.eu_size')}}</td>
                                <td>38</td>
                                <td>40</td>
                                <td>42</td>
                                <td>44</td>
                                <td>46</td>
                            </tr>
                            <tr >
                                <td>{{__('text.bel')}}</td>
                                <td>69-72</td>
                                <td>73-46</td>
                                <td>77-80</td>
                                <td>81-84</td>
                                <td>85-88</td>
                            </tr>
                            <tr >
                                <td>{{__('text.kokrak')}}</td>
                                <td>84-87</td>
                                <td>88-91</td>
                                <td>92-95</td>
                                <td>96-99</td>
                                <td>100-103</td>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">3XL</th>
                                <th scope="col">4XL</th>
                                <th scope="col">5XL</th>
                            </tr>
                            <tr >
                                <td>{{__('text.ru_size')}}</td>
                                <td></td>
                                <td></td>
                                <td>54-56</td>
                                <td>58-60</td>
                                <td>62-64</td>
                            </tr>
                            <tr >
                                <td>{{__('text.eu_size')}}</td>
                                <td></td>
                                <td></td>
                                <td>48-50</td>
                                <td>52-54</td>
                                <td>56-58</td>
                            </tr>
                            <tr >
                                <td>{{__('text.bel')}}</td>
                                <td></td>
                                <td></td>
                                <td>89-95</td>
                                <td>96-102</td>
                                <td>103-109</td>
                            </tr>
                            <tr >
                                <td>{{__('text.kokrak')}}</td>
                                <td></td>
                                <td></td>
                                <td>104-110</td>
                                <td>111-117</td>
                                <td>118-124</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                   <div> <h3>{{__('text.for_kids')}}</h3></div>
                <div class="unit whole table-responsive">

                    <table class="table table-hover table-secondary">
                        <thead>
                        <tr>
                            <th scope="col">{{__('text.age')}}</th>
                            <th scope="col">4-6</th>
                            <th scope="col">6-8</th>
                            <th scope="col">8-10</th>
                            <th scope="col">10-12</th>
                            <th scope="col">12-14</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr >
                            <td>{{__('text.bel')}}</td>
                            <td>42-46</td>
                            <td>46-50</td>
                            <td>50-54</td>
                            <td>54-58</td>
                            <td>58-62</td>
                        </tr>
                        <tr >
                            <td>{{__('text.kokrak')}}</td>
                            <td>49-55</td>
                            <td>55-61</td>
                            <td>61-67</td>
                            <td>67-73</td>
                            <td>73-79</td>
                        </tr>
                        <tr >
                            <td>{{__('text.heigh')}}</td>
                            <td>104-122</td>
                            <td>116-134</td>
                            <td>128-146</td>
                            <td>140-158</td>
                            <td>152-170</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                    <div><p>{{__('text.about_size')}}</p></div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
            </div>
            </div>
        </main>
@endsection

@section('js')
    <script>
    </script>
@endsection
