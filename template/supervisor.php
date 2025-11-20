<style>
  .supervisor_new {
    background-color: #eefcff;
    border-radius: 10px;
    padding: 30px;
    margin-top: 64px;
    box-sizing: border-box;
  }
  .supervisor_new .sec_inner {
    display: flex;
    gap: 20px;
    max-width: 1110px;
    margin: 0 auto;
  }
  .supervisor_new_image {
    width: 18%;
  }
  .supervisor_new_box h2 {
    font-size: 22px;
    font-weight: bold;
    color: #41c3de;
    text-align: left;
    margin-bottom: 30px;
    position: relative;
    line-height: 1.4;
  }
  .supervisor_new_box h2::after {
    content: "";
    background-color: #41c3de;
    border-radius: 20px;
    width: 100%;
    height: 1px;
    position: absolute;
    bottom: -16px;
    left: 50%;
    transform: translateX(-50%);
  }
  .supervisor_new_box h2 .supervisor_name {
    font-size: 27px;
    color: #707070;
  }
  .supervisor_new_box h2 .supervisor_sub_title {
    font-size: 16px;
    color: #707070;
  }
  .supervisor_new_box .supervisor_new_txt {
    font-size: 12px;
    display: flex;
    gap: 24px;
  }
  .supervisor_new_box .career p .year {
    padding-right: 1em;
  }
  @media only screen and (max-width: 780px) {
    .supervisor_new {
      padding: 30px 20px;
      width: 95%;
      margin: 32px auto 0;
    }
    .supervisor_new_box h2::after {
      display: none;
    }
    .supervisor_new_box .supervisor_new_title {
      display: flex;
      align-items: center;
      gap: 24px;
      margin-bottom: 26px;
      position: relative;
    }
    .supervisor_new_box .supervisor_new_title::after {
      position: absolute;
      content: "";
      background-color: #41c3de;
      border-radius: 20px;
      width: 100%;
      height: 1px;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
    }
    .supervisor_new_image {
      width: 34%;
    }
    .supervisor_new_box h2 {
      font-size: 16px;
      margin-bottom: 0;
      line-height: 1.6;
    }
    .supervisor_new_box h2 .supervisor_name {
      font-size: 20px;
    }
    .supervisor_new_box h2 .supervisor_sub_title {
      font-size: 14px;
    }
    .supervisor_new_box .supervisor_new_txt {
      font-size: 14px;
      flex-direction: column;
      gap: 14px;
    }
    .supervisor_new_box .career p {
      display: flex;
      align-items: flex-start;
      margin: 0 0 6px;
    }
    .supervisor_new_box .career p .year {
      flex: 0 0 4em;
    }
    .supervisor_new_box .career p .text {
      flex: 1;
    }
  }
</style>

<section class="inn02 supervisor_new">
  <div class="sec_inner">
    <div class="supervisor_new_image pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/supervisor_round.png" alt="監修者 浦上 克哉 教授">
    </div>
    <div class="supervisor_new_box">
      <h2 class="pc">
        <span>監修者</span><br><span class="supervisor_name">浦上 克哉</span> <span class="supervisor_sub_title">教授</span>
      </h2>
      <div class="supervisor_new_title sp">
        <div class="supervisor_new_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/supervisor_round.png" alt="監修者 浦上 克哉 教授">
        </div>
        <h2>
          <span>監修者</span><br><span class="supervisor_name">浦上 克哉</span> <span class="supervisor_sub_title">教授</span>
        </h2>
      </div>
      <div class="supervisor_new_txt">
        <div>
          日本認知症予防学会代表理事<br>
          日本老年精神医学会理事<br>
          日本老年学会理事<br>
          日本認知症予防学会専門医
        </div>
        <div class="career">
          <p><span class="year">1983年</span><span class="text">鳥取大学医学部医学科卒業</span></p>
          <p><span class="year">1988年</span><span class="text">同大大学院博士課程修了</span></p>
          <p><span class="year">1990年</span><span class="text">同大脳神経内科・助手</span></p>
          <p><span class="year">1996年</span><span class="text">同大脳神経内科・講師</span></p>
          <p><span class="year">2001年</span><span class="text">同大保険学科生体制御学講座環境保健学分野の教授（2022年まで）</span></p>
          <p><span class="year">2016年</span><span class="text">北翔大学客員教授（併任）</span></p>
          <p><span class="year">2022年</span><span class="text">鳥取大学医学部保健学科認知症予防学講座（寄付講座）教授に就任</span></p>
        </div>
      </div>
    </div>
  </div>
</section>
